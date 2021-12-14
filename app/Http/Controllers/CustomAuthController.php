<?php

namespace App\Http\Controllers;

use App\Mail\Subscribe;
use App\Mail\Subscribek;
use Illuminate\Http\Request;
use App\Models\brend;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\Pradut;
use Illuminate\Support\Facades\Mail;

class CustomAuthController extends Controller
{
  public function login()
  {
    return view("auth.login");
  }
  public function registration()
  {
    return view("auth.registration");
  }

  public function cod($id)
  {
    $user = brend::where('email','=',$id)->first();
    return view("auth.cod",['user'=>$user]);
  }

  public function registrU(Request $req)
  {
      $pin = mt_rand(100000, 999999);
      $req->validate([
          'name'=>'required',
          'email'=>'required|email|unique:brends',
          'password'=>'required|min:5|max:12'
      ]);   
      
        $user = new brend();
        $user->name = $req['name'];
        $user->email = $req['email'];
        $user->password = $req['password'];
        $user->code = $pin;
        $user->save();
        Mail::to($req->email)->queue(new Subscribe($pin));
        return redirect()->route('cod',[$req->email]); 
    
  }
  public function registrUser(Request $req)
  {
      $req->validate([
          'name'=>'required',
          'email'=>'required',
          'password'=>'required',
          'code' => 'max:6',
          'code_confirmation' => 'required_with:code|same:code|max:6|min:6'
      ]);  
      Mail::to($req->email)->queue(new Subscribek($req->name, $req->email, $req->password));
  
      brend::where(['email'=>$req->email])->update([
        'name' => $req->name,
        'email' => $req->email,
        'password' => Hash::make($req['password']),
        'code' => $req->code
      ]); 

      $user = brend::where('email','=',$req['email'])->first();
        if ($user) {
          if (Hash::check($req->password, $user->password)) {
            $req->session()->put('loginID',$user->id);
            return redirect('dashbord');
          }
        }
         
  }
  public function loginuser(Request $req)
  {
    if($req->email == "admin@gmail.com" && $req->password == "admin"){
      return redirect('p2');
    }else{
    $req->validate([
      'email'=>'required',
      'password'=>'required|min:5|max:12'
    ]);
    $user = brend::where('email','=',$req['email'])->first();
      if ($user) {
        if (Hash::check($req->password, $user->password)) {
          $req->session()->put('loginID',$user->id);
          return redirect('dashbord');
        }else{
          return back()->with('fail','Password is not');
        } 
      }
    }
  }
  public function dashbord()
  {
    $data = array();
    if (Session::has('loginID')) {
      $data = brend::where('id','=',Session::get('loginID'))->first();
    }
    $item = Pradut::all();
    return view('dashbord',['prod'=>$item], compact('data'));
  } 
  public function logaut()
  {
   if(Session::has('loginID')) {
      Session::pull('loginID');
      return redirect('login');
   }
  }
}
