<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Candidate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreCandidateRequest;
use App\Http\Requests\UpdateCandidateRequest;
use Illuminate\Http\Request;


class CandidateController extends Controller
{

     // Candidate login
    public function candidateLogin(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $candidate = User::where('email', $request->email)->where('role', 'Candidate')->first();
        if (!$candidate || !Hash::check($request->password, $candidate->password)) {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }
        $token = $candidate->createToken('candidate-access-token')->plainTextToken;
        return response()->json(['token' => $token, 'candidate' => $candidate], 200);
    }
    // Candidate registration
    public function candidateRegister(Request $request)
    {
        $request->validate([
            'fullName' => 'required|string',
            'email' => 'required|email|unique:users',
            'phoneNumber' => 'required|numeric',
            'password' => 'required|min:6',
            'Address' => 'required | string',
            'skills' => 'required|string',
            'workExperience' => 'required|string',
            'education' => 'required|string',
            'curriculumVitae' => 'required|string',
            'backgroundColor' => 'nullable|string',
            'textColor' => 'nullable|string',
            'fontFamily' => 'nullable|string',
            'profilePicture' => 'nullable|string',
            'coverPicture' => 'nullable|string',
            'coverLetter' => 'nullable|string',
            'jobPreferences' => 'nullable|string',
            // ... add more validation rules for other columns
        ]);

        $candidate = User::create([
            'fullName' => $request->fullName,
            'email' => $request->email,
            'phoneNumber' => $request->phoneNumber,
            'password' => Hash::make($request->password),
            'Address' => $request->Address,
            'role' => 'Candidate',
        ]);

        Candidate::create([
            'id_user' => $candidate->idUser,
            'skills' => $request->skills,
            'workExperience' => $request->workExperience,
            'education' => $request->education,
            'curriculumVitae' => $request->curriculumVitae,
            'backgroundColor' => $request->backgroundColor,
            'textColor' => $request->textColor,
            'fontFamily' => $request->fontFamily,
            'profilePicture' => $request->profilePicture,
            'coverPicture' => $request->coverPicture,
            'coverLetter' => $request->coverLetter,
            'jobPreferences' => $request->jobPreferences,
            // ... add more columns
        ]);

        $token = $candidate->createToken('candidate-access-token')->plainTextToken;
        return response()->json(['token' => $token, 'candidate' => $candidate], 201);
    }

    public function candidateLogout(Request $request){
        $request->user()->tokens()->delete();
        return response()->json(['message' => 'Successfully logged out']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Candidate::all();
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
     * @param  \App\Http\Requests\StoreCandidateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCandidateRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function show(Candidate $candidate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function edit(Candidate $candidate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCandidateRequest  $request
     * @param  \App\Models\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCandidateRequest $request, Candidate $candidate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Candidate $candidate)
    {
        //
    }
}
