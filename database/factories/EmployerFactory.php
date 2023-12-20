<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmployerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public static $currentIteration = 0;

    public function fetchData() {
        $jsonData = json_decode(file_get_contents(public_path('/data/EMPLOYERS_DATA.json')), true);

        return $jsonData;
    }

    public function definition()
    {   
        $candidateData = $this->fetchData();

        return [
            'companyName' => $candidateData[self::$currentIteration]['companyName'],
            'city' => $candidateData[self::$currentIteration]['city'],
            'zip' => $candidateData[self::$currentIteration]['zip'],
            'country' => $candidateData[self::$currentIteration]['country'],
            'industry' => $candidateData[self::$currentIteration]['industry'],
            'employeeCount' => $candidateData[self::$currentIteration]['employeeCount'],
            'logo' => $candidateData[self::$currentIteration]['logo'],
            'coverPicture' => $candidateData[self::$currentIteration]['coverPicture'],
            'bio' => $candidateData[self::$currentIteration]['bio'],
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
