<?php
namespace App\Http\Controllers;

use stdClass;
use App\Mail\FeedbackMailer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Test;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class FeedbackController extends Controller {
    public function index() {
        return view('loyallt');
    }

    public function send(Request $request) {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:company',
            'password'=>'required|min:3|max:12'
        ]);

        $data = new stdClass();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = $request->password;        
        Mail::to($data->email)->send(new FeedbackMailer($data));
        $data=new Test();
        $data->name=$request['name'];
        $data->email=$request['email'];
        $data->password = Hash::make($request['password']);
        $user = $data->save();        
        $user = Test::where('email','=',$request['email'])->first();
        if ($user) {
          if (Hash::check($request->password, $user->password)) {
            $request->session()->put('ID',$user->id);
            return redirect('pro');
            }
        }
     
    }
    public function log(Request $req)
    {
        $req->validate([
            'email'=>'required',
            'password'=>'required|min:3|max:12'
        ]);
        
        $user = Test::where('email','=',$req['email'])->first();
        if ($user) {    
          
          if (Hash::check($req->password, $user->password)) {
            $req->session()->put('ID',$user->id);
            return redirect('pro');
            }else{
                return back()->with('fail','Password is not');
            }  
        }
    }
    public function pro()
    {
      $data = array();
      if (Session::has('ID')) {
        $data = Test::where('id','=',Session::get('ID'))->first();
      }
      return view('new.pro', compact('data'));
    } 

  public function logaut()
  {
   if(Session::has('ID')) {
      Session::pull('ID');
      return redirect('/test2');
    }
  }
    
}