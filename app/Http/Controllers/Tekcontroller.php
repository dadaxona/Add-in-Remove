<?php

namespace App\Http\Controllers;
use App\Mail\Subscribe;
use App\Models\company;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\Authorize;

use function GuzzleHttp\Promise\queue;

class Tekcontroller extends Controller
{
    public function index()
    {
        return view('email');
    }

    public function subscribe(Authorize $request) 
    {
        company::create($request->validated());        
        Mail::to($request->email)->queue(new Subscribe($request->name,$request->email,$request->password));
        return redirect('ind');   
    }  
}