<?php
namespace App\Http\Controllers;
use App\Model\Doctor;
use App\Model\Patient;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;


class PrescriptionController extends Controller
{

    public function generatePdf($id)
{
    $docid = Auth::user()->id;
    $doctor = Doctor::findOrFail($docid);
    $name = $doctor->name;
    $phone = $doctor->phone;
    $depart = $doctor->department;
    $patient = Patient::findOrFail($id);
    $patientname = $patient->name;
    $patientage = $patient->age;
    $medicine = $patient->medicine;

    $pdf = Pdf::loadView('prescription.pdf', [
        'doctor' => $name,
        'doctorphone' => $phone,
        'department' => $depart,
        'patientname' => $patientname,
        'patientage' => $patientage,
        'medicine' => $medicine,
    ]);

    $date = date('Y-m-d');
    return $pdf->download($patientname . '_' . $date . '_prescription.pdf');
}

}

