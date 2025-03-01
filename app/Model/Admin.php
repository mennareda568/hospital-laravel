<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable= 
    ["id","name","email","password","gender","address","phone"];

}