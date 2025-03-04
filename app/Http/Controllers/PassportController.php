<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use Illuminate\Support\Facades\Hash;

class PassportController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users|email',
            'password' => 'required',
        ]);
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'role' => 'admin',
        ]);
        $token = $user->CreateToken('menna')->accessToken;
        return response()->json(['token' => $token], 200);
    }

    public function login(Request $request)
    {
        $credentials = [
            "email" => $request->email,
            "password" => $request->password,
        ];
        if (auth()->attempt($credentials)) {
            $token = auth()->user()->CreateToken('menna')->accessToken;
            return response()->json(['token' => $token], 200);
        } else {
            return response()->json(['error' => 'unauth'], 401);
        }
    }

}
