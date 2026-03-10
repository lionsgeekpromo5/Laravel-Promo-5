<?php

namespace App\Models;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'post_owner',
        'post_title',
        'post_description',
    ];

    public function comments(){
        return $this->hasMany(Comment::class, 'post_id');
    }


}
