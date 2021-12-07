<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function index()
    {
       $posts=Http::get('https://jsonplaceholder.typicode.com/users')->json();     
        
        return view('jsonples',['com'=>$posts]);
    }
}
