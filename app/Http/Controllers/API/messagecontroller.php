<?php

namespace App\Http\Controllers\API;
use App\Model\Message;
use App\Http\Controllers\Controller;
use App\Http\Resources\MessageResource;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class messagecontroller extends Controller
{

   public function index(){
     $messages= MessageResource::collection( Message::all());
     $data=[
        "msg"=>"all data from messages table",
        "status"=>200,
        "data"=>$messages
     ];
     return response()->json($data);
   }

   public function show($id){
     $messages= Message::find($id);
     if($messages){

        $data=[
            "msg"=>"return one record from messages table",
            "status"=>200,
            "data"=>new MessageResource($messages)
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
        'id' => 'required|unique:messages|max:20',
        'name' => 'required',
        'email' => 'required',
        'message' => 'required',
    ]);

    if ($validate->fails()) {
        $data=[
            "msg"=>"error in validation",
            "status"=>201,
            "data"=> $validate->errors()
          ];
          return response()->json($data);
    }

    $messages=Message::create([
     "id"=>$request->id,
     "name"=>$request->name,
     "email"=>$request->email,
     "message"=>$request->message,
    ]);
     $data=[
        "msg"=>"created successfully",
        "status"=>200,
        "data"=>new MessageResource($messages)
     ];
      return response()->json($data);
    
   }

   public function delete(Request $request){
    $id= $request->id;
    $messages=Message::find($id);
    if($messages){
        $messages->delete();
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
    $messages= Message::find($old_id);
      if($messages){
        $validate= Validator::make($request->all(), [
          'id' => [
             'required',
              Rule::unique('messages')->ignore($old_id),
          ],
          'name' => 'required',
          'email' => 'required',
          'message' => 'required',

          ]);
      
        if ($validate->fails()) {
          $data=[
              "msg"=>"error in validation",
              "status"=>201,
              "data"=> $validate->errors()
          ];
          return response()->json($data);
        }

    $messages->update([
      "id"=>$request->id,
      "name"=>$request->name,
      "email"=>$request->email,
      "message"=>$request->message,
    ]);
  
     $data=[
      "msg"=>"updated successfully",
      "status"=>200,
      "data"=> new MessageResource($messages)
      
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