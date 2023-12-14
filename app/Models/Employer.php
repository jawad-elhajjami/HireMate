<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;
    protected $table = 'employers';
    protected $primerykey = 'idEmployer';
    protected $fillable = [
        'id_user',
        'companyName',
        'city',
        'zip',
        'country',
        'industry',
        'employeeCount',
        'logo',
        'coverPicture',
        'bio',
    ];

    // Relationship with User
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'idUser');
    }

    public function JobOffers(){
        return $this->hasMany(JobOffer::class,'employer_id','idEmployer');
    }
}