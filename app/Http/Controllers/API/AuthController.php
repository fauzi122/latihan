<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function index(Request $request)
    {
        if(! Auth::attempt($request->only('email','password'))){
            return response()->json([
                'status' => false,
                'message' => 'Email atau Kata Sandi salah'
            ]);
        }

        $user = User::where('email',$request->email)->firstOrFail();

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'status'            => true,
            'message'           => 'Log-in Sukses',
            'access_token'      => $token,
            'token_type'        => 'Bearer'
        ]);

    }

    public function logout()
    {
        Auth::user()->tokens()->delete();
        return response()->json([
            'message' => 'Log-out Sukses'
        ]);

    }
}
