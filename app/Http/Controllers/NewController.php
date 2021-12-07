<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bin;
class NewController extends Controller
{
    public function e()
    {
      return view('e');
    }

    public function show()
    {
        $data=Bin::paginate(10);
        return view('list',['binomo'=>$data]);
    }

    public function addbinomo()
    {
      return view("addbinomo");
    }

    public function sho($id)
    {
      return view('show', [
        'binomo' => Bin::find($id)
    ]);
      
    }


    public function edit($id)
    {
          
       $binomo = Bin::find($id);
       return view("edit",['binomo'=>$binomo]);
    }

    public function create(Request $req)
    {
        $data=$req->validate([
            'email' => 'required|max:255',
            'password' => 'required',
            
          ]);    
    
          $binomo = new Bin;
          $binomo -> email = $data['email'];
          $binomo -> password = $data['password'];
          $binomo->save();

          return redirect("add");
    }

    public function update(Request $req)
    {
       $binomo = Bin::find($req->id);
       $binomo -> email = $req -> email;
       $binomo -> password = $req -> password;
       $binomo -> save();
       return redirect("list");
    }


    public function delete($id)
    {
        $binomo = Bin::find($id);
        $binomo->delete();
      
        return redirect("list");
    }

    
    
}
