<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobRequest extends Model
{
    use HasFactory;

    protected $table = 'job_requests';
    protected $primarykey = "request_id";

    protected $fillable = [
        'applicant_id',
        'jobTitle',
        'description',
        'requestedContract',
        'fieldOfExpertise',
    ];

    public function candidate()
    {
        return $this->belongsTo(Candidate::class, 'applicant_id', 'idCandidate');
    }
    
}