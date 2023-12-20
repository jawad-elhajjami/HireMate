<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class JobOfferFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public static $currentIteration = 0;

    public function fetchData() {
        $jsonData = json_decode(file_get_contents(public_path('/data/JOB_OFFERS_DATA.json')), true);

        return $jsonData;
    }

    public function definition()
    {   
        $candidateData = $this->fetchData();

        return [
            'title' => $candidateData[self::$currentIteration]['title'],
            'description' => $candidateData[self::$currentIteration]['description'],
            'salary' => $candidateData[self::$currentIteration]['salary'],
            'location' => $candidateData[self::$currentIteration]['location'],
            'contractType' => $candidateData[self::$currentIteration]['contractType'],
            'remoteOrOnSite' => $candidateData[self::$currentIteration]['remoteOrOnSite'],
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
