<?php

namespace Database\Factories;

use Arr;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    // public function fetchUserData() {
    //     // $apiUrl = 'https://randomuser.me/api/';
    //     $jsonData = '/public/data/USERS_DATA .json';
        
    //     // Fetch data from the API
    //     $json = file_get_contents($jsonData);
    
    //     // Decode the JSON data
    //     $data = json_decode($json, true);
    
    //     // Extracting data
    //     $userData = $data['results'][0];
    
    //     // Extracted information
    //     $firstName = $userData['name']['first'];
    //     $lastName = $userData['name']['last'];
    //     $email = $userData['email'];
    //     $phone = $userData['phone'];
    //     $address = $userData['location']['street']['number'] . ' ' . $userData['location']['street']['name'];
    //     $password = $userData['login']['password'];
    
    //     // Return the extracted data as an associative array
    //     return [
    //         'fullName' => $firstName. " " .$lastName,
    //         'email' => $email,
    //         'phone' => $phone,
    //         'address' => $address,
    //         'password' => $password,
    //     ];
    // }

    public static $currentIteration = 0;

    public function fetchData() {
        $jsonData = json_decode(file_get_contents(public_path('/data/USERS_DATA.json')), true);

        return $jsonData;
    }

    public function definition()
    {
        $usersData = $this->fetchData();

        return [
            'fullName' => $usersData[self::$currentIteration]['fullName'],
            'email' => $usersData[self::$currentIteration]['email'],
            'phoneNumber' => $this->faker->randomNumber(9, true),
            'address' => $usersData[self::$currentIteration]['address'],
            'password' => $usersData[self::$currentIteration]['password'],
            'role' => $usersData[self::$currentIteration]['role'],
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'created_at' => now(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
