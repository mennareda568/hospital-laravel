<?php

namespace App\Http\Controllers\API;

use App\Model\Admin;
use App\Http\Controllers\Controller;
use App\Http\Resources\AdminResource;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class admincontroller extends Controller
{
  public function index()
  {
    $admins = AdminResource::collection(Admin::all());
    $data = [
      "msg" => "all data from admins table",
      "status" => 200,
      "data" => $admins
    ];
    return response()->json($data);
  }

  public function show($id)
  {
    $admins = admin::find($id);
    if ($admins) {

      $data = [
        "msg" => "return one record from admins table",
        "status" => 200,
        "data" => new AdminResource($admins)
      ];
      return response()->json($data);
    } else {
      $data = [
        "msg" => "no such id ",
        "status" => 201,
        "data" => null
      ];
      return response()->json($data);
    }
  }

  public function store(Request $request)
  {

    $validate = Validator::make($request->all(), [
      'id' => 'required|unique:admins|max:20',
      'name' => 'required',
      'email' => 'required|unique:users',
      'address' => 'required|min:5|max:255',
      'phone' => 'required|max:20',
    ]);

    if ($validate->fails()) {
      $data = [
        "msg" => "error in validation",
        "status" => 201,
        "data" => $validate->errors()
      ];
      return response()->json($data);
    }


    $admins = admin::create([
      "id" => $request->id,
      "name" => $request->name,
      "email" => $request->email,
      "address" => $request->address,
      "phone" => $request->phone,
    ]);
    $data = [
      "msg" => "created successfully",
      "status" => 200,
      "data" => new AdminResource($admins)
    ];
    return response()->json($data);
  }

  public function delete(Request $request)
  {
    $id = $request->id;
    $admins = admin::find($id);
    if ($admins) {
      $admins->delete();
      $data = [
        "msg" => "deleted successfully",
        "status" => 200,
        "data" => null

      ];
      return response()->json($data);
    } else {

      $data = [
        "msg" => "no such id",
        "status" => 201,
        "data" => null

      ];
      return response()->json($data);
    }
  }

  public function update(Request $request)
  {
    $old_id = $request->old_id;
    $admins = admin::find($old_id);
    if ($admins) {
      $validate = Validator::make($request->all(), [
        'id' => [
          'required',
          Rule::unique('admins')->ignore($old_id),
        ],
        'name' => 'required',
        'email' => 'required|unique:users',
        'address' => 'required|min:5|max:255',
        'phone' => 'required|max:20',
      ]);

      if ($validate->fails()) {
        $data = [
          "msg" => "error in validation",
          "status" => 201,
          "data" => $validate->errors()
        ];
        return response()->json($data);
      }

      $admins->update([
        "id" => $request->id,
        "name" => $request->name,
        "email" => $request->email,
        "address" => $request->address,
        "phone" => $request->phone,
      ]);

      $data = [
        "msg" => "updated successfully",
        "status" => 200,
        "data" => new AdminResource($admins)

      ];
      return response()->json($data);
    } else {

      $data = [
        "msg" => "no such id",
        "status" => 201,
        "data" => null

      ];
      return response()->json($data);
    }
  }
}
