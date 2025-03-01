<?php
namespace App\Http\Controllers;

use App\Model\Doctor;
use App\Model\Profile;
use App\Model\Patientbooking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PatientbookingController extends Controller
{
   //show booking table
    public function index(Request $request)
    {
        $data = Patientbooking::where('patientemail', Auth::user()->email)->get();
        return view('mybooking', compact('data'));
    }

    //delete booking 
    public function delete($id)
    {
        $booking = Patientbooking::findOrFail($id);
        $booking->delete();
        return redirect()->route('relation')->with("message", "deleted successfully");
    }


    // book new appointments 
    public function book($id)
    {
        $Doctor = Doctor::findOrFail($id);
        $doctorEmail=$Doctor->email;
        $bookingsCount = PatientBooking::where('doctoremail', $doctorEmail)
            ->count();
        if ($bookingsCount >= 3) {
            return redirect()->route('doctorlist')->with("message", "Doctor Has No Booking Available");
    
        } else {
            $user_id = Auth::user()->id;
            $profile = Profile::where('user_id', $user_id)->firstOrFail();
            return view('patientbooking/create', ["result" => $Doctor,
            "data" => $profile]);
        }
    }


    //savebook new appointments 
    public function savebook(Request $item)
    {
        
        $item->validate([
            'patientname' => 'required',
            'patientage' => 'required|numeric|between:18,100',            
            'patientphone' => 'required',
        ]);

        Patientbooking::create([
            "doctor" => $item->doctor,
            "doctoremail" => $item->doctoremail,
            "department" => $item->department,
            "days" => $item->days,
            "time" => $item->time,
            "patientname" => $item->patientname,
            "patientemail" => $item->patientemail,
            "patientphone" => $item->patientphone,
            "patientage" => $item->patientage,
            "consultancyfees" => $item->consultancyfees,
        ]);
        return redirect()->route('relation')->with("message", "Booked Successfully");
    }

}

