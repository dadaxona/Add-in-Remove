<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Royhat;
class UpdateController extends Controller
{
  // public function doska()
  // {
  //   return view("doska");
  // }
  public function create(Request $req)
  {
    $compan = $req->validate([
      'name'=>'required',
      'email'=>'required',          
    ]);
    $company = new Royhat;
    $company -> name = $compan['name'];
    $company -> email = $compan['email'];   
    $company -> save();
    return redirect("qw");
  }
  public function show()
  {     
   $data = Royhat::all();
   return view('doska',['company'=>$data]);
  }
//   public function edit($id)
//   {s
//      $data = Royhat::find($id);
//      return view('yu',['company'=>$data]);
//   }
//   public function update(Request $req)
//   {
//     $company = Royhat::find($req->id);
//     $company -> name = $req -> name;
//     $company -> email = $req -> email;  
//     $company -> save();
//     return redirect('qw');
//   }  
  public function delete($id)
  {
    $a = Royhat::find($id);
    $a -> delete($id);
    return redirect("qw");
  }
}
