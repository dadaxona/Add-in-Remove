<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Amal;

class AmaliyController extends Controller
{
    public function amal()
    {
        return view('doska');
    }  
    
    public function create(Request $req)
    {        
        $a = $req->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',          
          ]);
        $amaliy = new Amal;  
            $amaliy->name = $a["name"];
            $amaliy->email = $a["email"];
            $amaliy->password = $a["password"];
            $amaliy->save();
            return redirect("show");
        
    }
    public function show()
    {     
     $data = Amal::all();
     return view('doska',['company'=>$data]);
    }
}
