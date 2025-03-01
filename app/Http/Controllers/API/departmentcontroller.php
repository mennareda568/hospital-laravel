<?php

namespace App\Http\Controllers\API;
use App\Model\Department;
use App\Http\Controllers\Controller;
use App\Http\Resources\DepartmentResource;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class departmentcontroller extends Controller
{
   public function index(){
     $departments= DepartmentResource::collection( Department::all());
     $data=[
        "msg"=>"all data from departments table",
        "status"=>200,
        "data"=>$departments
     ];
     return response()->json($data);
   }

   public function show($id){
     $departments= Department::find($id);
     if($departments){

        $data=[
            "msg"=>"return one record from departments table",
            "status"=>200,
            "data"=>new DepartmentResource($departments)
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
        'id' => 'required|unique:departments|max:20',
        'name' => 'required',
    ]);

    if ($validate->fails()) {
        $data=[
            "msg"=>"error in validation",
            "status"=>201,
            "data"=> $validate->errors()
          ];
          return response()->json($data);
    }

    
    $departments=Department::create([
     "id"=>$request->id,
     "name"=>$request->name,
    ]);

     $data=[
        "msg"=>"created successfully",
        "status"=>200,
        "data"=>new DepartmentResource($departments)
    ];
      return response()->json($data);
    
   }

   public function delete(Request $request){
    $id= $request->id;
    $departments=department::find($id);
    if($departments){
        $departments->delete();
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
    $departments= department::find($old_id);
      if($departments){
        $validate= Validator::make($request->all(), [
          'id' => [
             'required',
              Rule::unique('departments')->ignore($old_id),
          ],
          'name' => 'required',
          ]);
      
        if ($validate->fails()) {
          $data=[
              "msg"=>"error in validation",
              "status"=>201,
              "data"=> $validate->errors()
          ];
          return response()->json($data);
        }

    $departments->update([
      "id"=>$request->id,
      "name"=>$request->name,
    ]);
  
     $data=[
      "msg"=>"updated successfully",
      "status"=>200,
      "data"=> new DepartmentResource($departments)
      
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
