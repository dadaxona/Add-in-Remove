<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pribl;
use App\Models\Pradut;
use App\Models\Prad2;
use App\Models\pradut3;
use App\Models\Jamiyigim;
use Illuminate\Support\Facades\DB;

class PriblController extends Controller
{
    public function show4()
    {
        $data = Pribl::all();
        $date = Jamiyigim::all();
        return view('prod5',['pro2'=>$data],compact('date'));
    }
    public function update(Request $req)
    {
        $id=$req->input('id');
        $soni=$req->input('soni');
        $nam=$req->input('name');
        $narx=$req->input('narx');
        $narx2=$req->input('narx2');      

        $data=Pradut::find($req->id);       
        $son=$data->soni-$soni;
        $data->soni=$son;
        $data->save(); 

        $binomo = pradut3::find($req->id);
        $binomo -> id = $id;
        $binomo -> name = $nam;
        $soni2=$binomo -> soni + $soni;
        $binomo -> soni = $soni2;
        $binomo -> narx2 = $narx2;
        $binomo->save();
        return redirect("w2");       
        
    } 
    public function delete($id)
    {
      $data = Jamiyigim::find($id);
      $data->delete();
      return redirect('jami');
    }  
    
}
