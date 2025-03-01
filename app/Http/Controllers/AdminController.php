<?php
namespace App\Http\Controllers;

use App\User;
use App\Model\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
     public function index()
    {
        $data = Admin::where('id', '>', 1)->paginate(4);
        return view('admin', compact('data'));
    }

    public function show($id)
    {
        $admin = Admin::findOrFail($id);
        return view('admin/show', ["result" => $admin]);
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        $admin = Admin::findOrFail($id);
        $admin->delete();
        return redirect()->route('admin')->with("message", "deleted successfully");
    }


    public function edit($id)
    {
        $admin = Admin::findOrFail($id);
        return view("admin/edit", ["result" => $admin]);
    }

    public function saveedit(Request $request)
    {
        $old_id = $request->old_id;
        $admin = Admin::findOrFail($old_id);
        $user = User::findOrFail($old_id);

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$user->id,
            'address' => 'required',
            'phone' => 'required',
            'gender' => 'required',
        ]);

        $admin->update([
            "name" => $request->name,
            "email" => $request->email,
            "address" => $request->address,
            "gender" => $request->gender,
            "phone" => $request->phone,
        ]);

        $user->update([
            "name" => $request->name,
            "email" => $request->email,
        ]);
        return redirect()->route("admin")->with("message", "edited successfully");
    }

     //  change password for admin
     public function password()
     {
         return view("admin/password");
     }
     
     //  change password for admin
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
         return redirect()->route("home")->with("messageadmin", "Your Password changed successfully");
     }
}
