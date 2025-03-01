<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class Patientbooking extends Model
{
    protected $fillable =
    ["id", "doctor", "doctoremail", "department", "days", "time", "patientname", "patientemail", "patientphone", "patientage", "consultancyfees"];
    
}
