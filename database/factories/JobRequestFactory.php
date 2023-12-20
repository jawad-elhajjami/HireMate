<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class JobRequestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public static $currentIteration = 0;

    public function fetchData() {
        $jsonData = json_decode(file_get_contents(public_path('/data/JOB_REQUESTS_DATA.json')), true);

        return $jsonData;
    }

    public function definition()
    {   
        $candidateData = $this->fetchData();

        return [
            'jobTitle' => $candidateData[self::$currentIteration]['jobTitle'],
            'description' => $candidateData[self::$currentIteration]['description'],
            'requestedContract' => $candidateData[self::$currentIteration]['requestedContract'],
            'fieldOfExpertise' => $candidateData[self::$currentIteration]['fieldOfExpertise'],
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}