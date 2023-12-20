<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobOffer extends Model
{
    use HasFactory;

    protected $table = 'job_offers';
    protected $primerykey = 'idJobOffer';
    protected $fillable = [
        'employer_id',
        'title',
        'description',
        'salary',
        'location',
        'contractType',
        'remoteOrOnSite',
    ];

    public function employer()
    {
        return $this->belongsTo(Employer::class, 'employer_id', 'idEmployer');
    }
}