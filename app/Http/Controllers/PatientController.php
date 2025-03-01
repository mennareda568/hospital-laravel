<?php
namespace App\Http\Controllers;
use App\Model\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PatientController extends Controller
{
    //show patient table
     public function index(Request $request)
    {
        $data = Patient::where('doctoremail', Auth::user()->email)->paginate(4);
        return view('patient', compact('data'));
    }

    //delete patient 
    public function delete($id)
    {
        $Patient = Patient::findOrFail($id);
        $Patient->delete();
        return redirect()->route('patient')->with("message", "deleted successfully");
    }

    //create patient 
    public function create()
    {
        return view('patient/create');
    }

    //savecreate patient 
    public function savenew(Request $item)
    {
        $item->validate([
            'name' => 'required',
            'email' => 'required|unique:patients',
            'gender' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'age' => 'required|numeric|between:18,85',
            'medicalhistory' => 'required',
            'medicine' => 'required' 
        ]);
        Patient::create([
            "doctoremail" => $item->doctoremail,
            "name" => $item->name,
            "email" => $item->email,
            "gender" => $item->gender,
            "address" => $item->address,
            "phone" => $item->phone,
            "age" => $item->age,
            "medicalhistory" => $item->medicalhistory,
            "medicine" => $item->medicine 
        ]);

        return redirect()->route('patient')->with("message", "Created Successfully");
    }

    //update patient information 
    public function edit($id)
    {
        $Patient = Patient::findOrFail($id);
        return view("patient/edit", ["result" => $Patient]);
    }

    //saveupdate patient information 
    public function saveedit(Request $request)
    {
        $old_id = $request->old_id;
        $Patient = Patient::findOrFail($old_id);

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'age' => 'required|numeric|between:18,85',
            'medicalhistory' => 'required',
            'medicine' => 'required' 
        ]);
        $Patient->update([
            "doctoremail" => $request->doctoremail,
            "name" => $request->name,
            "email" => $request->email,
            "gender" => $request->gender,
            "address" => $request->address,
            "phone" => $request->phone,
            "age" => $request->age,
            "medicalhistory" => $request->medicalhistory,
            "medicine" => $request->medicine 

        ]);
        return redirect()->route("patient")->with("message", "edited successfully");
    }

}
