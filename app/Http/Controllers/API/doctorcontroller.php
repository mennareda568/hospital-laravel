<?php

namespace App\Http\Controllers\API;
use App\Model\Doctor;
use App\Http\Controllers\Controller;
use App\Http\Resources\DoctorResource;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class doctorcontroller extends Controller
{
   public function index(){
     $doctors= DoctorResource::collection( Doctor::all());
     $data=[
        "msg"=>"all data from doctors table",
        "status"=>200,
        "data"=>$doctors
     ];
     return response()->json($data);
   }

   public function show($id){
     $doctors= Doctor::find($id);
     if($doctors){

        $data=[
            "msg"=>"return one record from doctors table",
            "status"=>200,
            "data"=>new DoctorResource($doctors)
        ];
        return response()->json($data);
     }else{
       $data=[
            "msg"=>"no such id ",
            "status"=>201,
            "data"=>null
       ];
       return response()->json($data);
     }
   }

   public function store(Request $request){

    $validate= Validator::make($request->all(), [
        'id' => 'required|unique:doctors|max:20',
        'doc_image' => 'required|max:2048|mimes:png,jpeg,gif',
        'name' => 'required',
        'email' => 'required|unique:users',
        'department' => 'required',
        'phone' => 'required|max:20',
        'days' => 'required',
        'time' => 'required',
        'Consultancyfees' => 'required',

    ]);

    if ($validate->fails()) {
        $data=[
            "msg"=>"error in validation",
            "status"=>201,
            "data"=> $validate->errors()
          ];
          return response()->json($data);
    }

    if($request->hasFile("doc_image")){
        $image= $request->doc_image;
        $imageName= time() . rand(1,100) . "." .$image->extension();
        $image-> move(public_path("img/doctors/"),$imageName);
    }
    
    $doctors=doctor::create([
        "id"=>$request->id,
        "doc_image"=>$request->doc_image,
        "name"=>$request->name,
        "email"=>$request->email,
        "department"=>$request->department,
        "phone"=>$request->phone,
        "days"=>$request->days,
        "time"=>$request->time,
        "Consultancyfees"=>$request->Consultancyfees
    ]);
     $data=[
        "msg"=>"created successfully",
        "status"=>200,
        "data"=>new DoctorResource($doctors)
    ];
      return response()->json($data);
    
   }

   public function delete(Request $request){
    $id= $request->id;
    $doctors=Doctor::find($id);
    if($doctors){
        $doctors->delete();
        $data=[
            "msg"=>"deleted successfully",
            "status"=>200,
            "data"=>null
    
        ];
         return response()->json($data);
    } else {

        $data=[
            "msg"=>"no such id",
            "status"=>201,
            "data"=>null
    
        ];
         return response()->json($data);
    }
   }

   public function update(Request $request){
    $old_id= $request->old_id;
    $doctors= Doctor::find($old_id);
      if($doctors){
        $validate= Validator::make($request->all(), [
          'id' => [
             'required',
              Rule::unique('doctors')->ignore($old_id),
          ],
          'name' => 'required',
          'email' => 'required|unique:users',
          'department' => 'required',
          'phone' => 'required|max:20',
          'days' => 'required',
          'time' => 'required',
          'Consultancyfees' => 'required',
          ]);
      
        if ($validate->fails()) {
          $data=[
              "msg"=>"error in validation",
              "status"=>201,
              "data"=> $validate->errors()
          ];
          return response()->json($data);
        }

    if($request->hasFile("doc_image")){
      $image= $request->doc_image;
      $imageName= time() . rand(1,100) . "." .$image->extension();
      $image-> move(public_path("img/doctors/"),$imageName);
   }else{
      $imageName=$request->doc_image;
    }
    $doctors->update([
        "id"=>$request->id,
        "doc_image"=>$imageName,
        "name"=>$request->name,
        "email"=>$request->email,
        "department"=>$request->department,
        "phone"=>$request->phone,
        "days"=>$request->days,
        "time"=>$request->time,
        "Consultancyfees"=>$request->Consultancyfees
    ]);
  
     $data=[
      "msg"=>"updated successfully",
      "status"=>200,
      "data"=> new DoctorResource($doctors)
      
    ];
    return response()->json($data);
      }else{
        
          $data=[
          "msg"=>"no such id",
          "status"=>201,
          "data"=> null
      
          ];
          return response()->json($data);
      }
       

   }

}
