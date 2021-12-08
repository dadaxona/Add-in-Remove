<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pradut;
use App\Models\Prad2;
use App\Models\pradut3;
use App\Models\Pribl;
use App\Models\Jamiyigim;
use Illuminate\Support\Facades\DB;

class PradutController extends Controller
{
    public function index()
    {
        $a=Jamiyigim::all();
        return view('jami.jami',['pro2'=>$a]);
    }
    public function create(Request $req)
    {
      $req->validate([
        'name'=>'required',
        'file'=>'required',          
        'soni'=>'required',          
        'narx'=>'required',          
        'narx2'=>'required',          
      ]);
      DB::table('pradut')
      ->where('name',$req->name)
      ->delete();      
      DB::table('prad2')
      ->where('name',$req->name)
      ->delete();  
      DB::table('prad3')
      ->where('name',$req->name)
      ->delete();  
      DB::table('pribl')
      ->where('name',$req->name)
      ->delete();
      
      $imageName = time().'.'.$req->file->getClientOriginalExtension();
      $file=$req->file->move('publicimges', $imageName);

      $photo = new Pradut;
      $photo -> name = $req['name'];
      $photo -> file = $file;         
      $photo -> soni = $req['soni'];   
      $photo -> narx = $req['narx'];   
      $photo -> narx2 = $req['narx2'];   
      $photo -> save();     
    
      $photo = new Prad2;
      $photo -> name = $req['name'];                 
      $photo -> soni = $req['soni'];   
      $photo -> narx = $req['narx'];  
      $photo -> save();

      $p = new pradut3;
      $p -> name = $req['name'];   
      $re = $req['soni']-$req['soni'];      
      $p -> soni = $re;      
      $p -> narx2 = $req['narx2'];
      $p -> save();

      $data= new Pribl;
      $data->name=$req['name'];        
      $son=$data->abyom+$req['soni'];        
      $data->abyom=$son;
      $nar=$data->olinish+$req['narx'];
      $data->olinish=$nar;
      $nar2=$data->sotilish+$req['narx2'];
      $data->sotilish=$nar2;
      $prib2=$req['narx2']-$req['narx'];            
      $data->pribl=$prib2;
      $prib3=$req["soni"]*$prib2;            
      $data->jami=$prib3;      
      $data->save();
      
      // $users = DB::table('jamiyigim')->insert(['narx2'=>$prib3]);
      $users = DB::table('jamiyigim')->select('narx2')->first();
      $j=$users->narx2 + $prib3;
      DB::table('jamiyigim')->update(['narx2' => $j]);     
      return redirect('p2');    
    }

    public function show()
    {
     $data = Pradut::all();
     return view('prod',['prode'=>$data]);
    }

    public function edit($id)
    {
      $data = Pradut::find($id);
      return view('prod2',['pr'=>$data]);
    }

    public function update(Request $req)
    {      
      $imageName = time().'.'.$req->file->getClientOriginalExtension();
      $file=$req->file->move('publicimges', $imageName); 
      $data=Pradut::find($req->id);      
      $data->name=$req->name;      
      $data->file=$file;      
      $data->soni=$req->soni;
      $data->narx=$req->narx;
      $data->narx2=$req->narx2;
      $data->save();
      return redirect('p2');   
    }
    public function delete($id)
    {      
      $data = Pradut::find($id);
      $data->delete();
      $data = Prad2::find($id);
      $data->delete();
      $data = pradut3::find($id);
      $data->delete();
      $pribl = Pribl::find($id);
      $pribl->delete();      
      $jam=$pribl->jami;
      $users = DB::table('jamiyigim')->select('narx2')->first();
      $j=$users->narx2 - $jam;;
      DB::table('jamiyigim')->update(['narx2' => $j]);     
      return redirect('p2');   
     
    }  
}
