<?php

namespace App\Models;

use Illuminate\Support\Facades\Date;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'author',
        'slug',
        'image',
        'thumbnail',
        'body',
        'post_category',
    ];

    public function comments() {
        return $this->hasMany('App\Models\Comment', 'posts_id');
    }

}
