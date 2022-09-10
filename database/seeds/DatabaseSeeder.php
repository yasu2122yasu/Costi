<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\SoftDeletes;

class DatabaseSeeder extends Seeder
{
    public function run(){
      //~1GBパターンのデータ
        DB::table('plans')->insert([
            'plan_name' => "LINEMO ミニプラン 990円".PHP_EOL."povo2.0 990円\n楽天モバイル 1,078円",
            'capacity' => 1,    
            'cost' => 1,
            'carrier' =>1,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => "LINEMO ミニプラン 990円\npovo2.0 990円\n楽天モバイル 1,078円",
            'capacity' => 1,    
            'cost' => 2,
            'carrier' => 1,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => "LINEMO ミニプラン 990円\npovo2.0 990円\n楽天モバイル 1,078円",
            'capacity' => 1,    
            'cost' => 3,
            'carrier' => 1,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => "LINEMO ミニプラン 990円\npovo2.0 990円\n楽天モバイル 1,078円",
            'capacity' => 1,    
            'cost' => 4,
            'carrier' => 1,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => "日本通信 合理的シンプル290プラン 290円\nHISモバイル 自由自在290プラン 550円\nIIjimo（2ギガプラン）850円",
            'capacity' => 1,    
            'cost' => 1,
            'carrier' => 2,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => "日本通信 合理的シンプル290プラン 290円\nHISモバイル 自由自在290プラン 550円\nIIjimo（2ギガプラン）850円",
            'capacity' => 1,    
            'cost' => 2,
            'carrier' => 2,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => "日本通信 合理的シンプル290プラン 290円\nHISモバイル 自由自在290プラン 550円\nIIjimo（2ギガプラン）850円",
            'capacity' => 1,    
            'cost' => 3,
            'carrier' => 2,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => "日本通信 合理的シンプル290プラン 290円\nHISモバイル 自由自在290プラン 550円\nIIjimo（2ギガプラン）850円",
            'capacity' => 1,    
            'cost' => 4,
            'carrier' => 2,
        ]);
        
      //3GBパターンのデータ
        DB::table('plans')->insert([
            'plan_name' => "LINEMO ミニプラン 990円\npovo2.0 990円\n楽天モバイル 1,078円",
            'capacity' => 2,    
            'cost' => 1,
            'carrier' =>1,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => "LINEMO ミニプラン 990円\npovo2.0 990円\n楽天モバイル 1,078円",
            'capacity' => 2,    
            'cost' => 2,
            'carrier' => 1,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => "LINEMO ミニプラン 990円\npovo2.0 990円\n楽天モバイル 1,078円",
            'capacity' => 2,    
            'cost' => 3,
            'carrier' => 1,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => "LINEMO ミニプラン 990円\npovo2.0 990円\n楽天モバイル 1,078円",
            'capacity' => 2,    
            'cost' => 4,
            'carrier' => 1,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => "HISモバイル 自由自在290プラン 770円\nLINEMO ミニプラン 990円\nIIjimo（4ギガプラン）990円",
            'capacity' => 2,    
            'cost' => 1,
            'carrier' => 2,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => "HISモバイル 自由自在290プラン 770円\nLINEMO ミニプラン 990円\n楽天モバイル 1,078円",
            'capacity' => 2,    
            'cost' => 2,
            'carrier' => 2,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => "HISモバイル 自由自在290プラン 770円\nLINEMO ミニプラン 990円\n楽天モバイル 1,078円",
            'capacity' => 2,    
            'cost' => 3,
            'carrier' => 2,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => "HISモバイル 自由自在290プラン 770円\nLINEMO ミニプラン 990円\n楽天モバイル 1,078円",
            'capacity' => 2,    
            'cost' => 4,
            'carrier' => 2,
        ]);
        
      //20GBのパターンのデータ
        DB::table('plans')->insert([
            'plan_name' => "楽天モバイル 2,178円\nLINEMO スマホプラン 2,728円\npovo2.0 データ追加20GB 2,700円",
            'capacity' => 3,    
            'cost' => 1,
            'carrier' =>1,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => "楽天モバイル 2,178円\nLINEMO スマホプラン 2,728円\npovo2.0 データ追加20GB 2,700円",
            'capacity' => 3,    
            'cost' => 2,
            'carrier' => 1,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => "ahamo 2,970円\nLINEMO スマホプラン 2,728円\npovo2.0 データ追加20GB 2,700円",
            'capacity' => 3,    
            'cost' => 3,
            'carrier' => 1,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => "ahamo 2,970円\nLINEMO スマホプラン 2,728円\npovo2.0 データ追加20GB 2,700円",
            'capacity' => 3,    
            'cost' => 4,
            'carrier' => 1,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => "イオンモバイル(音声20GBプラン) 1,958円\nIIJmio（20ギガプラン）2,000円\n楽天モバイル 2,178円",
            'capacity' => 3,    
            'cost' => 1,
            'carrier' => 2,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => "イオンモバイル(音声20GBプラン) 1,958円\nIIJmio（20ギガプラン）2,000円\n楽天モバイル 2,178円",
            'capacity' => 3,    
            'cost' => 2,
            'carrier' => 2,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => "イオンモバイル(音声20GBプラン) 1,958円\nIIJmio（20ギガプラン）2,000円\n楽天モバイル 2,178円",
            'capacity' => 3,    
            'cost' => 3,
            'carrier' => 2,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => "イオンモバイル(音声20GBプラン) 1,958円\nIIJmio（20ギガプラン）2,000円\n楽天モバイル 2,178円",
            'capacity' => 3,    
            'cost' => 4,
            'carrier' => 2,
        ]);
        
        //無制限プラン
        DB::table('plans')->insert([
            'plan_name' => "楽天モバイル 2,178円\nahamo 2,970円\nLINEMO スマホプラン 2,728円",
            'capacity' => 4,    
            'cost' => 1,
            'carrier' =>1,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => "楽天モバイル 2,178円\nahamo 2,970円\nLINEMO スマホプラン 2,728円",
            'capacity' => 4,    
            'cost' => 2,
            'carrier' => 1,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => "楽天モバイル 2,178円\nahamo 2,970円\nLINEMO スマホプラン 2,728円",
            'capacity' => 4,    
            'cost' => 3,
            'carrier' => 1,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => "ドコモ 5Gギガホプレミア 7,315円\nau 使い放題MAX 7,328円\nソフトバンク メリハリ無制限 7,238円",
            'capacity' => 4,    
            'cost' => 4,
            'carrier' => 1,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => "楽天モバイル 2,178円\nahamo 2,970円\nLINEMO スマホプラン 2,728円",
            'capacity' => 4,    
            'cost' => 1,
            'carrier' => 2,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => "楽天モバイル 2,178円\nahamo 2,970円\nLINEMO スマホプラン 2,728円",
            'capacity' => 4,    
            'cost' => 2,
            'carrier' => 2,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => "楽天モバイル 2,178円\nahamo 2,970円\nLINEMO スマホプラン 2,728円",
            'capacity' => 4,    
            'cost' => 3,
            'carrier' => 2,
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => "ドコモ 5Gギガホプレミア 7,315円\nau 使い放題MAX 7,328円\nソフトバンク メリハリ無制限 7,238円",
            'capacity' => 4,    
            'cost' => 4,
            'carrier' => 2,
        ]);
    }
}