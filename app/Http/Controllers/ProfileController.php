<?php
namespace App\Http\Controllers;

use App\Model\Profile;
use App\User;
use App\Model\Patientbooking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class ProfileController extends Controller
{
    public function index($id)
    {
      
        $profile = Profile::where('user_id', $id)->firstOrFail();
        return view('profile', ['result' => $profile]);
    }


    public function edit($id)
    {
        $patient = Profile::where('user_id', $id)->firstOrFail();
        return view("profile/edit", ["result" => $patient]);
    }


    public function saveedit(Request $request)
    {
        $old_id = $request->old_id;
        $profile = Profile::findOrFail($old_id);
        
        $user_id = $profile->user_id;
        $user = User::findOrFail($user_id);
        $useremail = $user->email;

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'phone' => 'required',
            'age' => 'required|numeric|between:18,85'
        ]);

        $profile->update([
            "name" => $request->name,
            "email" => $request->email,
            "phone" => $request->phone,
            "age" => $request->age,
        ]);

        $user->update([
            "name" => $request->name,
            "email" => $request->email,
        ]);

        PatientBooking::where('patientemail', $useremail)
            ->update([
                "patientname" => $request->name,
                "patientemail" => $request->email,
                'patientphone' => $request->phone,
                'patientage' => $request->age,
            ]);

        return redirect()->route('myprofile', ['id' => $user->id])->with("message", "edited successfully");
    }


    //  change password for patient
    public function password()
    {
        return view("profile/password");
    }


    //  change password for patient
    public function pass(Request $request)
    {
        $old_id = $request->old_id;
        $user = User::findOrFail($old_id);

        $request->validate([
            'password' => 'required',
        ]);

        $user->update([
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->route("home")->with("message", "Your Password changed successfully");
    }
}
