<?php

namespace Database\Seeders;

use App\Models\Candidate;
use App\Models\Employer;
use App\Models\JobOffer;
use App\Models\JobRequest;
use App\Models\User;
use Database\Factories\CandidateFactory;
use Database\Factories\EmployerFactory;
use Database\Factories\JobOfferFactory;
use Database\Factories\JobRequestFactory;
use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()    
    {
        $userFactoryForCandidates = User::factory()
            ->has(Candidate::factory()
                ->has(JobRequest::factory()));

        $userFactoryForEmployers = User::factory()
            ->has(Employer::factory()
                ->has(JobOffer::factory()));

        for ($i = 0; $i < 10; $i++) {
            $userFactoryForCandidates->create();
            UserFactory::$currentIteration++;  
            CandidateFactory::$currentIteration++;
            JobRequestFactory::$currentIteration++;
        }

        for ($i = 0; $i < 10; $i++) {
            $userFactoryForEmployers->create();
            UserFactory::$currentIteration++;
            EmployerFactory::$currentIteration++;
            JobOfferFactory::$currentIteration++;
        }

    }

}
