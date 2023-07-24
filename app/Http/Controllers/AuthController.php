<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function createUSer(CreateUserRequest $request){
       $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
       ]);

       return response()->json([
        'status' => true,
        'messages' => 'user created succesfully',
        'token' => $user->createToken("API TOKEN")->plainTextToken,
       ], 200);
    }

    public function loginUser(LoginRequest $request){
        //tratar de logear al usuario
        if( !Auth::attempt($request->only(['email', 'password']))){
            return response()->json([
                'status' => false,
                'messages' => 'Email and Password do not match',
            ], 401);
        }

        $user = User::where('email', $request->email)->first();
        return response()->json([
            'status' => true,
            'messages' => 'User loggin',
            'token' => $user->createToken("API TOKEN")->plainTextToken,
        ], 200);

    }
}
