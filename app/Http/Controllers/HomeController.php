<?php
namespace App\Http\Controllers;

use App\Model\Department;
use App\Model\Doctor;
use App\Model\Patientbooking;
use App\User;
use App\Model\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{

    //home page
    public function index()
    {
        $patibook = Patientbooking::count();
        $doctors = Doctor::count();
        $department = Department::count();

        return view('home', [
            "countpatibook" => $patibook,
            "countdoctors" => $doctors,
            "countdepart" => $department,
        ]);
    }


    //show appointments for doctor
    public function myapp(Request $request)
    {
        $data = Patientbooking::where('doctoremail', Auth::user()->email)->get();
        return view('myappointment', compact('data'));
    }


    //create user for admin
    public function create()
    {
        return view('user/create');
    }

  //savecreate user or admin
    public function save(Request $item)
    {
        $item->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'role' => 'required',
        ]);
       
        $user=User::create([
            "name" => $item->name,
            "email" => $item->email,
            'password' => Hash::make($item['password']),
            "role" => $item->role,
        ]);

        
            if ($user->role === 'admin') {
                Admin::create([
                    'id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email,
                ]);
                return redirect()->route('admin')->with("message", "Created Successfully");
            } elseif ($user->role === 'doctor') {
                Doctor::create([
                    'id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email,
                ]);
                return redirect()->route('doctor')->with("message", "Created Successfully");
            }
    }       

}


