<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\brend;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\Pradut;

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
  public function registrUser(Request $req)
  {
      $req->validate([
          'name'=>'required',
          'email'=>'required|email|unique:brends',
          'password'=>'required|min:5|max:12'
      ]);   
      
        $user = new brend();
        $user->name = $req['name'];
        $user->email = $req['email'];
        $user->password = Hash::make($req['password']);
        $res = $user->save();

        
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
