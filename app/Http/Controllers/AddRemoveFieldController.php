<?php
namespace App\Http\Controllers;

use App\Models\Dobovit;
use Illuminate\Http\Request;
 
use App\Models\Todo;
 
use Illuminate\Support\Facades\Validator;
 
class AddRemoveFieldController extends Controller
{
    public function index()
    {
        return view('karzina.dobov');  

    }

    public function store(Request $request) {
        $request->validate([
            'addmore.*.name' => 'required',
            'addmore.*.qty' => 'required',
            'addmore.*.price' => 'required',
        ]);
        foreach ($request->addmore as $key => $value) {
            Todo::create($value);        
        }  
        return back()->with('success', 'Record Created Successfully.');
    }

      
    public function dobov()
    {
        return view('karzina.dobov1');     
    }

    public function create(Request $request)
    {
        $request->validate([
            'addmore.*.name' => 'required',
            'addmore.*.email' => 'required|email|unique:dobovits',
            'addmore.*.password' => 'required',
        ]);
        foreach ($request->addmore as $key => $value) {
            Dobovit::create($value);        
        }  
        return back()->with('success', 'Record Created Successfully.');      
    }
 
}