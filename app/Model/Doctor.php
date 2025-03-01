<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
class Doctor extends Model
{
    protected $fillable= 
    ["id","doc_image","name","email","password","department","gender","phone","address","age","days","time","Consultancyfees"];

    
}

