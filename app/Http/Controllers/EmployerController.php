<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Employer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreEmployerRequest;
use App\Http\Requests\UpdateEmployerRequest;
use Symfony\Component\HttpFoundation\Request;

class EmployerController extends Controller
{
    public function employerLogin(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $employer = User::where('email', $request->email)->where('role', 'Employer')->first();
        if (!$employer || !Hash::check($request->password, $employer->password)) {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }
        $token = $employer->createToken('employer-access-token')->plainTextToken;
        return response()->json(['token' => $token, 'employer' => $employer], 200);
    }
    // Employer registration
    public function employerRegister(Request $request)
    {
        $request->validate([
            'fullName' => 'required|string',
            'email' => 'required|email|unique:users',
            'phoneNumber' => 'required|numeric',
            'password' => 'required|min:6',
            'Address' => 'required | string',
            'companyName' => 'required|string',
            'city' => 'required|string',
            'zip' => 'required|numeric',
            'country' => 'required|string',
            'industry' => 'required|string',
            'employeeCount' => 'required|numeric',
            // ... add more validation rules for other columns
        ]);

        $employer = User::create([
            'fullName' => $request->fullName,
            'email' => $request->email,
            'phoneNumber' => $request->phoneNumber,
            'password' => Hash::make($request->password),
            'Address' => $request->Address,
            'role' => 'Employer',
        ]);

        Employer::create([
            'id_user' => $employer->idUser,
            'companyName' => $request->companyName,
            'city' => $request->city,
            'zip' => $request->zip,
            'country' => $request->country,
            'industry' => $request->industry,
            'employeeCount' => $request->employeeCount,
            // ... add more columns
        ]);
        $token = $employer->createToken('employer-access-token')->plainTextToken;
        return response()->json(['token' => $token, 'employer' => $employer], 201);
    }

    public function employerLogout(Request $request){
        $request->user()->tokens()->delete();
        return response()->json(['message' => 'Successfully logged out']);
    }

    public function deleteEmployer($id)
{
    $employer = Employer::find($id);

    if (!$employer) {
        return response()->json(['message' => 'Employer not found'], 404);
    }

    $employer->delete();

    return response()->json(['message' => 'Employer deleted successfully']);
}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Employer::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEmployerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmployerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employer  $employer
     * @return \Illuminate\Http\Response
     */
    public function show(Employer $employer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employer  $employer
     * @return \Illuminate\Http\Response
     */
    public function edit(Employer $employer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEmployerRequest  $request
     * @param  \App\Models\Employer  $employer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmployerRequest $request, Employer $employer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employer  $employer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employer $employer)
    {
        
    }
}
