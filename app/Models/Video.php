<?php

namespace App\Models;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Video extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'url'
    ];

    public function comments(){
        return $this->morphMany(Comment::class, 'commentable');
    }
}
