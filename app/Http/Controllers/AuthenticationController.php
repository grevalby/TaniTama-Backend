<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthenticationController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
     
        $user = User::where('email', $request->email)->first();
     
        if (! $user || ! Hash::check($request->password, $user->password)) {
            return response()->json(['message' => 'The provided credentials are incorrect'], 400);
        }

     
        // return $user->createToken($request->email)->plainTextToken;
        $token = $user->createToken('token')->plainTextToken;
        return response()->json([
            'token' => $token
        ], 200);
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'photo' => 'https://storage.googleapis.com/tanitama_bucket/avatar/default_avatar.png'
        ]);

        $token = $user->createToken('token')->plainTextToken;
        return response()->json([
            'token' => $token
        ], 200);
    }

    public function authenticated(Request $request)
    {
        $user = Auth::user();
        return new UserResource($user);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json([
            'message' => 'Logged Out',
        ]);
    }
    
}
