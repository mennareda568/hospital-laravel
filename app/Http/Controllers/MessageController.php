<?php
namespace App\Http\Controllers;
use App\Model\Message;
use Illuminate\Http\Request;



class MessageController extends Controller
{
     
    public function store(Request $request){
        Message::create([
       "name"=>$request->name,
       "email"=>$request->email,
       "mobil"=>$request->mobil,
       "message"=>$request->message,
      ]);
      return redirect()->route('welcome')->with("message","your message sent successfully");
    }


    public function index()
    {
        $message = Message::paginate(4); 
        return view('message', [
            "result" => $message,
        ]);
    }

    public function delete($id){
        $msg=Message::findOrFail($id);
        $msg->delete();
        return redirect()->route("message")->with("message","Deleted Successfully");
    }

}
