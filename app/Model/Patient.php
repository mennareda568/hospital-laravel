<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class Patient extends Model
{
    protected $fillable= 
    ["id","doctoremail","name","email","gender","phone","address","age","medicalhistory","medicine"];

}
