<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Factories\HasFactory;

class Plan extends Model
{
    // use HasFactory;
    
    public function getUrlWithLinkAttribute(): string
    {
        $pattern = '/((?:https?|ftp):\/\/[-_.!~*\'()a-zA-Z0-9;\/?:@&=+$,%#]+)/';
        $replace = '<a href="$1">$1</a>';
        return preg_replace($pattern, $replace, $this->url);
    }
}
