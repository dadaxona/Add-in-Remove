<?php

namespace App\Providers;

use App\Models\Pradut;
use App\Models\Prad2;
use App\Models\pradut3;
use App\Models\Pribl;
use App\Models\Jamiyigim;
use Illuminate\Support\Facades\DB;
use App\Providers\StopService;

class ObjectService extends StopService
{
    protected $pradut;
    protected $prad2;
    protected $pradut3;
    protected $pribl;
    protected $jamiyigim;
    public function __construct(Pradut $pradut, Prad2 $prad2, pradut3 $pradut3, Pribl $pribl, Jamiyigim $jamiyigim)
    {
        $this->pradut = $pradut;
        $this->prad2 = $prad2;
        $this->pradut3 = $pradut3;
        $this->pribl = $pribl;
        $this->jamiyigim = $jamiyigim;
    }

    public function create($req)
    {
        $this->pradut->where('name',$req->name)->delete();
        $this->prad2->where('name',$req->name)->delete();
        $this->pradut3->where('name',$req->name)->delete();
        $this->pribl->where('name',$req->name)->delete();
       
        
        $imageName = time().'.'.$req->file->getClientOriginalExtension();
        $file=$req->file->move('publicimges', $imageName);
  
        $photo = $this->pradut;
        $photo -> name = $req['name'];
        $photo -> file = $file;         
        $photo -> soni = $req['soni'];   
        $photo -> narx = $req['narx'];   
        $photo -> narx2 = $req['narx2'];   
        $photo -> save();     
      
        $photo = $this->prad2;
        $photo -> name = $req['name'];                 
        $photo -> soni = $req['soni'];   
        $photo -> narx = $req['narx'];  
        $photo -> save();
  
        $p = $this->pradut3;
        $p -> name = $req['name'];   
        $re = $req['soni']-$req['soni'];      
        $p -> soni = $re;      
        $p -> narx2 = $req['narx2'];
        $p -> save();
  
        $data=  $this->pribl;
        $data->name=$req['name'];        
        $son=$data->abyom+$req['soni'];        
        $data->abyom=$son;
        $nar=$data->olinish+$req['narx'];
        $data->olinish=$nar;
        $nar2=$data->sotilish+$req['narx2'];
        $data->sotilish=$nar2;
        $prib2=$req['narx2']-$req['narx'];            
        $data->pribl=$prib2;                  
        $prib3=$data->jami=$req["soni"]*$prib2;      
        $data->save();
     
        DB::table('jamiyigim')->insert(['narx2'=>0]);    
        DB::table('jamiyigim')->insert(['narx2'=>$prib3]);     
        $users = DB::table('jamiyigim')->select('narx2')->first();
        $j=$users->narx2 + $prib3;
        DB::table('jamiyigim')->update(['narx2' => $j]);
        Jamiyigim::where('id','>',1)->delete();
        return back()->with('success', 'Record Created Successfully.');  
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
