<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;
    protected $fillable = [
        'reciver_id',
        'content',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'reciver_id', 'idUser');
    }
}