<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pradut;
use App\Models\Karzina;
use App\Models\Karzin;
use Illuminate\Support\Facades\DB;

class KarzinaController extends Controller
{
    public function index($clent)
    {       
        $id=$clent;
        $karzin = Karzina::query()->where('clent', 'LIKE', "%{$id}%")->get();
        return view('karzina.karzina' ,compact('karzin'));      
    }
    public function show(Request $request)
    {
        $request->validate([
            'son'=>'required',
            'clent'=>'required',
            'idy'=>'required'                
        ]);
        $data = Pradut::find($request->idy);           
        DB::table('karzinas')->insert([
            'clent'=>$request->clent,
            'idy'=>$request->idy,
            'file'=>$data->file,
            'name'=>$data->name,
            'narx'=>$data->narx,
            'narx2'=>$data->narx2,
            'son'=>$request->son,
        ]);
            $user = new Karzin();
            $user->clent = $request->clent;
            $user->idy= $request->idy;
            $user->file= $data->file;
            $user->name = $data->name;
            $user->narx = $data->narx;
            $user->narx2= $data->narx2;
            $user->son = $request->son;
            $user->save();
        
        return redirect()->route('indexkar',[$request->clent]);
    }
    public function delete($id)
    {
        $data = Karzina::find($id);
        $clent=$data->clent;
        $data->delete();
        return redirect()->route('indexkar',[$clent]);
    }

    public function store(Request $request)
    {
        DB::table('karzinas')->where('clent', 'LIKE', "%{$request->clent}%")->delete();
        return redirect('/dashbord');
    } 
    public function karz()
    {
        $kar=Karzin::all();
        return view('karzina.bolim',['karz'=>$kar]);       
    }
}
