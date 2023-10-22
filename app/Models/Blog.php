<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Comment;


class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'tags',
        'likes',
        'views',
        'status',
        'featuredImage',
        'publicationDate',
        'user_id'
    ];

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
