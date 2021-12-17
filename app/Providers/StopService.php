<?php

namespace App\Providers;

use App\Models\Jamiyigim;
use Illuminate\Support\Facades\DB;

class StopService
{
    protected $pradut;
    protected $prad2;
    protected $pradut3;
    protected $pribl;
    protected $jamiyigim;
    protected $model;
    public function getlist($config)
    {       
        return $this->model->select($config['columns'])->with($config['relations'])->paginate(20);            
    }
    public function index()
    {
        $a=$this->jamiyigim->all();
        return view('jami.jami',['pro2'=>$a]);
    }

    public function show()
    {
        $data = $this->pradut->all();
        return view('prod',['prode'=>$data]);
    }
    public function edit($id)
    {
        $data = $this->pradut->find($id);
        return view('prod2',['pr'=>$data]);
    }
    public function create($data)
    {
        return $this->model->create($data);
    }

    public function get($id)
    {        
       $edit=$this->model->findOrFail($id);
       return view('checkupdate',["item"=>$edit]);
    }

    public function update($req)
    {  
        $imageName = time().'.'.$req->file->getClientOriginalExtension();
        $file=$req->file->move('publicimges', $imageName); 
        $data=$this->pradut->find($req->id);      
        $data->name=$req->name;      
        $data->file=$file;      
        $data->soni=$req->soni;
        $data->narx=$req->narx;
        $data->narx2=$req->narx2;
        $data->save();

        $fff = $this->pribl->find($req->id);
        $fff2 = $this->jamiyigim->find(1);
        $fff2 ->narx2 = $fff2->narx2 - $fff->jami;
        $fff2 ->save();

        $data = $this->pribl->find($req->id);
        $data->name = 0;              
        $data->abyom = 0;
        $data->olinish = 0;
        $data->sotilish = 0;          
        $data->pribl = 0;                  
        $data->jami = 0;      
        $data->save();

        $data = $this->pribl->find($req->id);
        $data->name = $req->name;              
        $data->abyom = $data->abyom + $req->soni;
        $data->olinish = $data->olinish + $req->narx;
        $data->sotilish = $data->sotilish + $req->narx2;
        $prib2 = $req->narx2 - $req->narx;            
        $data->pribl=$prib2;                  
        $prib3 = $data->jami = $req->soni * $prib2;      
        $data->save();

        DB::table('jamiyigim')->insert(['narx2'=>0]);    
        DB::table('jamiyigim')->insert(['narx2'=>$prib3]);     
        $users = DB::table('jamiyigim')->select('narx2')->first();
        $j=$users->narx2 + $prib3;
        DB::table('jamiyigim')->update(['narx2' => $j]);
        Jamiyigim::where('id','>',1)->delete();

        return redirect('p2');                 
    }
 
}
