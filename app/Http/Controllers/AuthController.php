<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        $user = User::where('email' ,$request->email)->first();
        if(!$user || !Hash::check($request->password, $user->password)){
            throw ValidationException::withMessages([
                'email' => ['the provider are incorrect']
            ]);
        }
        return response()->json([
            'token'=> $user->createToken($request->email)->plainTextToken
        ]);
    }
    public function register(){

    }
    public function logout(){

    }
}
