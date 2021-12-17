<?php

namespace App\Providers;

use App\Models\Pradut;
use App\Models\Karzina;
use App\Models\Karzin;
use App\Models\Summa;
use App\Models\Istoriya;
use App\Models\Istoriyasumma;
class OOPServiceProject extends GlavniInterfazeServise
{
   protected $pradut;
   protected $karzina;
   protected $karzin;
   protected $summa;
   protected $istoriya;
   protected $istoriyasummaa;

   public function __construct(Pradut $pradut, Karzina $karzina, Karzin $karzin, Summa $summa, Istoriya $istoriya, Istoriyasumma $istoriyasumma)
   {
       $this->pradut=$pradut;
       $this->karzina=$karzina;
       $this->karzin=$karzin;
       $this->summa=$summa;
       $this->istoriya=$istoriya;
       $this->istoriyasummaa=$istoriyasumma;
   }

   public function get($clent)
   {
        $id=$clent;
        $karzin = $this->karzina->query()->where('clent', 'LIKE', "%{$id}%")->get();
        $k = $this->summa->where('clent', '=', $id)->first();
        return view('karzina.karzina', ["k"=>$k] ,compact('karzin')); 
   }

   public function karz()
   {
        $kar=$this->karzin->all();
        return view('karzina.bolim',['karz'=>$kar]); 
   }

   public function delete($id)
   {    
    $data = $this->karzina->find($id);      
    $clent=$data->clent;        
    $data->delete();
    $users = $this->summa->where('idd', '=', $id)->first();      
    $javob=$users->summa-$data->son * $data->narx2;            
    $data = $this->summa->where(['clent'=>$users->clent])->update(['summa' => $javob]);
    $datas = $this->summa->where('idd', '=', $id)->first();
    $datas->delete();
    return redirect()->route('indexkar',[$clent]);
   }

}
  