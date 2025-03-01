<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\Model\Profile;
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

        $userCount = User::count();
        if ($userCount == 0) {
            $user = User::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
                'role' => 'admin',
            ]);

        } else {
            $user = User::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
                'role' => 'patient',
            ]);

            Profile::create([
                'name' => $user->name,
                'email' => $user->email,
            ]);

            $profiles = Profile::where('user_id', null)->get();
            foreach ($profiles as $profile) {
                $profile->user_id = User::where('email', $profile->email)->first()->id;
                $profile->save();
            }
        }
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
    public function details()
    {

        return response()->json(['user' => auth()->user()], 200);
    }
}
