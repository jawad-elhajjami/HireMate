<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'commentor_id',
        'post_id',
        'content',
        'likes',
    ];

    public function user()
    {
        return $this->belongsTo(Candidate::class, 'commentor_id', 'idCandidate');
    }

    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id', 'idPost');
    }
}