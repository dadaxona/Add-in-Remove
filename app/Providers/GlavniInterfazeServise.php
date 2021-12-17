<?php

namespace App\Providers;
use App\Models\Pradut;
use App\Models\Karzina;
use App\Models\Karzin;
use App\Models\Summa;
use App\Models\Istoriya;
use App\Models\Istoriyasumma;
use Illuminate\Support\Facades\DB;
class GlavniInterfazeServise
{
    protected $pradut;
    protected $karzina;
    protected $karzin;
    protected $summa;
    protected $istoriya;
    protected $istoriyasumma;
  
    public function create($request)
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
            
            $user = new Karzin;
            $user->clent = $request->clent;
            $user->idy= $request->idy;
            $user->file= $data->file;
            $user->name = $data->name;
            $user->narx = $data->narx;
            $user->narx2 = $data->narx2;
            $user->son = $request->son;
            $user->save();

            $istor = new Istoriya;
            $istor->clent = $request->clent;
            $istor->file = $data->file;
            $istor->name = $data->name;
            $istor->son = $request->son;            
            $istor->narx2 = $data->narx2;
            $istor->save();

            $sum = new Summa;
            $sum->idd = $user->id;
            $sum->clent = $request->clent;
            $sum->idy = $request->idy;
            $sum->summa = 0;
            $sum->save();

            $sum = new Summa;
            $sum->idd = $user->id;
            $sum->clent = $request->clent;
            $sum->idy = $request->idy;
            $sum->summa = $request->son;
            $sum->save();
          
            $users = Summa::where('clent', '=', $request->clent)->first();     
            $javob=$users->summa+$request->son * $data->narx2;            
            Summa::where(['clent'=>$request->clent])->update(['summa' => $javob]);

            $istors = new Istoriyasumma;
            $istors->idd = $user->id;
            $istors->clent = $request->clent;
            $istors->idy = $request->idy;
            $istors->istorisumma = 0;
            $istors->save();

            $istors = new Istoriyasumma;
            $istors->idd = $user->id;
            $istors->clent = $request->clent;
            $istors->idy = $request->idy;
            $istors->istorisumma = $request->son;
            $istors->save();

            $userse = Istoriyasumma::where('clent', '=', $request->clent)->first();     
            $javob=$userse->istorisumma+$request->son * $data->narx2;            
            $data = Istoriyasumma::where(['clent'=>$request->clent])->update(['istorisumma' => $javob]);

            return redirect()->route('indexkar',[$request->clent]);   
    }
    
    public function store($request)
    {
        $this->karzina->where('clent', 'LIKE', "%{$request->clent}%")->delete();
        $this->summa->where('clent', 'LIKE', "%{$request->clent}%")->delete();
        return redirect('/dashbord');
    }

    public function show($id)
    {
        $istor=$this->istoriya->where('clent', '=', $id)->get();
        $k = $this->istoriyasumma->query()->where('clent', 'LIKE', "%{$id}%")->first();
        return view('karzina.istoriya',['karzin'=>$istor],compact('k'));
    }
}
