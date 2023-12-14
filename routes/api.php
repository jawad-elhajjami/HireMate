<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\CandidateController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//  ++++++++++++++++++++++++++++protect route+++++++++++++++++++++++++
Route::group(['middleware' => ['auth:sanctum']], function(){
    // User Profile, only accessible with JWT Auth
    Route::get('/user', function(){
        return 'inside';
    });
    Route::get('/candidates', [CandidateController::class, 'index']);
    Route::get('/employers', [EmployerController::class, 'index']);
    Route::post('/employers/logout', [EmployerController::class, 'employerLogout']);
    Route::post('employers/delete/{id}', [EmployerController::class, 'deleteEmployer']);
});

Route::post('/employers/register', [EmployerController::class, 'employerRegister']);
Route::post('/candidates/register', [CandidateController::class, 'candidateRegister']);
Route::post('/employers/login', [EmployerController::class, 'employerLogin']);

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });