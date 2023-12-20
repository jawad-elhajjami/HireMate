<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CandidateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public static $currentIteration = 0;

    public function fetchData() {
        $jsonData = json_decode(file_get_contents(public_path('/data/CANDIDATES_DATA.json')), true);

        return $jsonData;
    }

    public function definition()
    {   
        $candidateData = $this->fetchData();

        return [
            'skills' => $candidateData[self::$currentIteration]['skills'],
            'workExperience' => $candidateData[self::$currentIteration]['workExperience'],
            'education' => $candidateData[self::$currentIteration]['education'],
            'curriculumVitae' => $candidateData[self::$currentIteration]['curriculumVitae'],
            'backgroundColor' => $candidateData[self::$currentIteration]['backgroundColor'],
            'textColor' => $candidateData[self::$currentIteration]['textColor'],
            'fontFamily' => $candidateData[self::$currentIteration]['fontFamily'],
            'profilePicture' => $candidateData[self::$currentIteration]['profilePicture'],
            'coverPicture' => $candidateData[self::$currentIteration]['coverPicture'],
            'coverLetter' => $candidateData[self::$currentIteration]['coverLetter'],            
            'jobPreferences' => $candidateData[self::$currentIteration]['jobPreferences'],            
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }

}