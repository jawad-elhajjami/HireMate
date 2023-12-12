<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_user',
        'skills',
        'workExperience',
        'education',
        'curriculumVitae',
        'backgroundColor',
        'textColor',
        'fontFamily',
        'profilePicture',
        'coverPicture',
        'coverLetter',
        'jobPreferences',
    ];

    protected $casts = [
        'skills' => 'json', // Cast the 'skills' attribute to JSON
        'workExperience'=> 'json',
        'education' => 'json',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'idUser');
    }

    public function comments(){
        return $this->hasMany(Comment::class,'commentor_id','idCandidate');
    }

    public function JobRequests(){
        return $this->hasMany(JobRequest::class,'applicant_id','idCandidate');
    }
}