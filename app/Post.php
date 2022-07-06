<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'content',
    ];

    public static function slugGenerator($title){
        $slug = Str::slug($title, '-');
        $original_slug = $slug;

        $post_esistente = Post::where('slug', $slug)->first();
        $c = 1;
        while($post_esistente){
            $slug = $original_slug . '-' . $c;
            $c++;
            $post_esistente = Post::where('slug', $slug)->first();
        }

        return $slug;
    }
}
