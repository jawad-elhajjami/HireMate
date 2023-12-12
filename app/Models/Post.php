<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'author_id',
        'title',
        'content',
        'likes',
    ];

    public function candidate()
    {
        return $this->belongsTo(Candidate::class, 'author_id', 'idCandidate');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'post_id', 'idPost');
    }
}