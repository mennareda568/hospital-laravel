<?php
namespace App\Http\Controllers;

use App\Model\Department;
use Illuminate\Http\Request;


class DepartmentController extends Controller
{

    public function index()
    {
        $Department = Department::paginate(4); 
        return view('department', [
            "result" => $Department,
        ]);
    }

    public function delete($id)
    {
        $department = Department::findOrFail($id);
        $department->delete();
        return redirect()->route('department')->with("message", "deleted successfully");
    }

    public function create()
    {
        return view('department/create');
    }

    public function savenew(Request $item)
    {
        $item->validate([
            'name' => 'required',
        ]);
       
        Department::create([
            "name" => $item->name,
        ]);

        return redirect()->route('department')->with("message", "Created Successfully");
    }

    public function edit($id)
    {
        $department = Department::findOrFail($id);
        return view("department/edit", ["result" => $department]);
    }

    public function saveedit(Request $request)
    {
        $old_id = $request->old_id;
        $department = Department::findOrFail($old_id);

        $request->validate([
            'name' => 'required',
        ]);
        $department->update([
            "name" => $request->name,
        ]);
        return redirect()->route("department")->with("message", "edited successfully");
    }
}
