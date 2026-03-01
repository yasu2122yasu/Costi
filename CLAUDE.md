# CLAUDE.md — スマホ回線2.0 (Smartphone Plan 2.0)

## Project Overview

**スマホ回線2.0** is a Japanese web application that helps users find the most cost-effective smartphone data plan for their needs. Users answer three questions (data usage, budget, carrier preference) and receive a ranked list of matching plans sorted by monthly fee.

- **Production URL**: http://mobile-save.net/
- **Legacy URL**: https://ancient-waters-98823.herokuapp.com/
- **Language**: PHP (Laravel 6 LTS), Blade templates, Sass, JavaScript
- **Database**: MySQL (production), SQLite in-memory (tests)

---

## Tech Stack

| Layer | Technology |
|---|---|
| Framework | Laravel 6.x (LTS) |
| PHP | 7.2.5+ or ~8.0.0 |
| Frontend CSS | Bootstrap 4.3, MDB (Material Design Bootstrap) 4.8, Font Awesome 5.8 |
| Asset Bundling | Laravel Mix (Webpack) |
| Testing | PHPUnit 8/9 |
| CI | GitHub Actions (`.github/workflows/php.yml`) |
| Deployment | AWS EC2 + Route53 (primary), Heroku (legacy) |

---

## Directory Structure

```
Costi/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── PlanController.php     # Main application controller
│   │   │   └── Auth/                  # Laravel scaffold auth controllers (unused)
│   │   ├── Kernel.php
│   │   └── Middleware/
│   ├── Providers/
│   │   └── HelloServiceProvider.php   # Custom service provider
│   ├── Plan.php                       # Eloquent model for plans table
│   ├── Detail.php                     # Empty placeholder model (unused)
│   └── User.php                       # Default Laravel user model
├── database/
│   ├── migrations/
│   │   ├── 2022_09_05_100403_create_plans_table.php  # Main schema
│   │   └── 2014_10_12_*.php           # Default Laravel auth migrations
│   └── seeds/
│       └── DatabaseSeeder.php         # Seeds ~49 mobile plans
├── resources/
│   ├── views/
│   │   ├── layouts/
│   │   │   ├── app.blade.php          # Base HTML layout (CDN assets)
│   │   │   └── nav.blade.php          # Navigation bar
│   │   ├── search.blade.php           # Search form (homepage)
│   │   └── result.blade.php           # Search results page
│   ├── sass/
│   │   ├── app.scss                   # Main stylesheet entry
│   │   └── search.scss                # Search page custom styles
│   └── js/
│       ├── app.js                     # Main JS entry
│       └── bootstrap.js               # Bootstrap JS setup
├── routes/
│   └── web.php                        # All HTTP routes (2 routes total)
├── public/
│   ├── css/                           # Compiled CSS (app.css, style.css)
│   ├── js/                            # Compiled JS (app.js)
│   └── sotrage/                       # Static image assets (note: typo in dir name)
├── .github/workflows/php.yml          # CI pipeline
├── .env.heroku                        # Environment template for Heroku/local dev
├── Procfile                           # Heroku process definition
├── webpack.mix.js                     # Laravel Mix asset pipeline config
└── phpunit.xml                        # PHPUnit configuration
```

---

## Database Schema — `plans` Table

The single application table stores all smartphone plan data.

| Column | Type | Description |
|---|---|---|
| `id` | increments | Auto-increment primary key |
| `plan_name` | string(50) | Display name of the plan |
| `provider` | string(100) | Provider company name |
| `limited_speed` | string(100) | Data speed after cap is reached |
| `GB` | string(100) | Data allowance (display string, e.g. "20GB", "無制限") |
| `capacity` | integer | Search code: `1`=0–3GB, `2`=4–20GB, `3`=21GB+ |
| `cost` | integer | Search code: `1`=~¥1,000, `2`=~¥3,000, `3`=any |
| `fee` | integer | Actual monthly fee in yen (used for sorting) |
| `carrier_flag` | integer | Search code: `1`=major carrier (大手キャリア), `2`=MVNO |
| `carrier` | string | Display label: `"大手キャリア"` or `"MVNO"` |
| `url` | string | Official plan URL |
| `deleted_at` | timestamp | Soft delete column |
| `created_at` | timestamp | Auto-set to current |
| `updated_at` | timestamp | Auto-set to current |

**Important distinction**: `capacity`/`cost`/`carrier_flag` are integer search codes, while `GB`/`carrier` are human-readable display strings. Keep them in sync when adding plans.

---

## Application Routes

Defined in `routes/web.php`. Note: HTTPS is forced globally at the top of this file via `URL::forceScheme('https')`.

| Method | URI | Controller | Description |
|---|---|---|---|
| GET | `/` | `PlanController@search` | Renders the search form |
| GET | `/result` | `PlanController@result` | Executes search, renders results |

There are no API routes, auth routes, or named routes in active use.

---

## Core Application Logic

### `PlanController::search()` (`app/Http/Controllers/PlanController.php:15`)

Loads old search parameters from the session (stored by a previous `result()` call) and passes them to `search.blade.php` so radio buttons restore to their previous state. Then clears those session values.

### `PlanController::result()` (`app/Http/Controllers/PlanController.php:47`)

1. Reads `capacity`, `cost`, and `carrier_flag` from GET query parameters.
2. Builds an Eloquent query on `Plan` model, applying `WHERE` clauses only for non-null parameters (partial search is intentional).
3. Orders results by `fee` ascending and paginates at 5 per page.
4. Saves search parameters to session for the "back" button.
5. Passes results and search state to `result.blade.php`.

### `Plan` Model (`app/Plan.php`)

Has one custom accessor: `getUrlWithLinkAttribute()` — converts plain-text URLs stored in the `url` column into HTML anchor tags. However, `result.blade.php` currently inlines URL generation with `@php echo` instead of using this accessor.

---

## Views

### `search.blade.php`

- Extends `layouts.app` and includes `layouts.nav`.
- Three radio button groups: **capacity** (1/2/3), **cost** (1/2/3), **carrier_flag** (1/2).
- On load, checks `$old_capacity`, `$old_cost`, `$old_carrier` to restore prior selections.
- Submits via `GET` to `/result`.

### `result.blade.php`

- Displays plan cards in a `foreach` loop if results exist.
- Falls back to two hardcoded plan cards (ahamo and donedone) when `$plans->isEmpty()`.
- Contains a "検索画面へ戻る" (back to search) link pointing to `/`.

### `layouts/app.blade.php`

Base layout. Loads all CSS and JS from CDN (Bootstrap 4.3, MDB 4.8, Font Awesome 5.8, jQuery 3.4.1). Does **not** load the locally compiled `app.css` — individual views link it themselves.

---

## Development Setup

### Prerequisites

- PHP 7.2.5+ or 8.0
- Composer
- Node.js + npm
- MySQL (or use SQLite for local dev)

### Local Setup

```bash
# Install PHP dependencies
composer install

# Set up environment (copies .env.heroku as .env)
composer compile
# OR manually: cp .env.heroku .env

# Generate app key
php artisan key:generate

# Run migrations
php artisan migrate

# Seed the plans table (~49 plans)
php artisan db:seed

# Install JS/CSS dependencies
npm install

# Compile frontend assets
npm run dev        # development build
npm run watch      # watch mode
npm run production # production build

# Start development server
php artisan serve
```

### Asset Compilation

`webpack.mix.js` compiles:
- `resources/sass/app.scss` → `public/css/app.css`
- `resources/js/app.js` → `public/js/app.js`

---

## Testing

Tests use SQLite in-memory database (configured in `phpunit.xml`).

```bash
# Run all tests
vendor/bin/phpunit

# Run only unit tests
vendor/bin/phpunit --testsuite Unit

# Run only feature tests
vendor/bin/phpunit --testsuite Feature
```

Test directories: `tests/Unit/` and `tests/Feature/`. Currently only default Laravel scaffolding tests exist.

---

## CI/CD

**GitHub Actions** (`.github/workflows/php.yml`) runs on push/PR to `master`:
1. Validates `composer.json` and `composer.lock`
2. Caches Composer packages
3. Installs dependencies

The test runner step is currently commented out in the workflow.

**Heroku deployment**: `Procfile` runs `vendor/bin/heroku-php-apache2 public/`. The `composer compile` script copies `.env.heroku` to `.env`.

---

## Known Issues and Technical Debt

1. **Dead code in `PlanController::result()`** (`PlanController.php:105–111`): The `if ($request->get('back'))` block is unreachable because it appears after a `return` statement.

2. **Broken HTML in `result.blade.php`** (`result.blade.php:56,76`): The fallback plan cards contain `<a href="...">...</a>";` — a stray semicolons and double-quote after the closing anchor tag. This renders as visible text in the browser.

3. **Unused `Detail` model** (`app/Detail.php`): The model has no columns, relations, or usage. It appears to be a placeholder for future expansion.

4. **Inconsistent URL rendering**: `Plan::getUrlWithLinkAttribute()` exists but `result.blade.php` uses `@php echo` with inline string concatenation instead.

5. **`public/sotrage/` directory**: The directory name is a typo (should be `storage`). Contains `3000.png`.

6. **Auth scaffold is unused**: The `Auth` controllers and related migrations are present from `laravel/ui` scaffolding but authentication is not used by the application.

---

## Adding New Plans

New plans are added via `database/seeds/DatabaseSeeder.php`. Each plan entry must include all table columns. Ensure the integer codes align with the search logic:

- `capacity`: `1` (0–3GB), `2` (4–20GB), `3` (21GB+)
- `cost`: `1` (~¥1,000), `2` (~¥3,000), `3` (any price)
- `carrier_flag`: `1` (major carrier / 大手キャリア), `2` (MVNO)

After updating the seeder, run `php artisan db:seed` (or `php artisan migrate:fresh --seed` to reset).

---

## Conventions

- **PHP**: PSR-4 autoloading under the `App\` namespace mapping to `app/`.
- **Views**: Blade templates; all views extend `layouts.app` and use `@section('content')`.
- **Routes**: Use controller string syntax `'ControllerName@method'` (Laravel 6 style, not class-based closures).
- **Database**: Use Eloquent query builder (`Plan::query()->where(...)`) rather than raw SQL.
- **Session**: Use `$request->session()->put()` / `->get()` / `->forget()` for retaining search state across page navigation.
- **Language**: The UI and comments are in Japanese. Code identifiers and commit messages may mix English and Japanese.
