<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pradut;
use App\Models\Prad2;
use App\Models\pradut3;
class Prod2Controller extends Controller
{
    public function show()
    {
     $data = Prad2::all();
     return view('prod3',['prode'=>$data]);
    }

    public function show2()
    {
     $data = Pradut::all();
     return view('prod',['prode'=>$data]);
    }   
    public function show3()
    {
     $data = pradut3::all();
     return view('prod6',['pro2'=>$data]);
    }

    public function show4()
    {
     $data = Pradut::all();
     return view('prod4',['prode'=>$data]);
    } 
   
}
