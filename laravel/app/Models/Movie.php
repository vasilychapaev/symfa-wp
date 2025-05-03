<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'wp_posts';
    protected $primaryKey = 'ID';
    public $timestamps = false;
    protected $fillable = [
        'post_title', 
        'post_content',
    ];
}
