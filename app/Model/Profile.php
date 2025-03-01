<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable= 
    ["id","name","email","phone",'age'];

}