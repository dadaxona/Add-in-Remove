<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Models\Todo;
use App\Providers\ForeachService;
 

 
class AddRemoveFieldController extends Controller
{
    public function index()
    {
        return view('karzina.dobov');  

    }

    public function store(Request $request){
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

    public function create(Request $request, ForeachService $oop)
    {
        $request->validate([
            'addmore.*.name' => 'required',
            'addmore.*.email' => 'required|email|unique:dobovits',
            'addmore.*.password' => 'required',
        ]);
        return $oop->store($request); 
    }
}