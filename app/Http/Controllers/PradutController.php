<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\ObjectService;
class PradutController extends Controller
{
    public function index(ObjectService $data)
    {
        return $data->index();
    }
    public function create(Request $req, ObjectService $data)
    {
      $req->validate([
        'name'=>'required',
        'file'=>'required',          
        'soni'=>'required',          
        'narx'=>'required',          
        'narx2'=>'required',          
      ]);
      return $data->create($req);  
    }

    public function show(ObjectService $data)
    {
      return $data->show();
    }

    public function edit($id, ObjectService $data)
    {
      return $data->edit($id);
    }

    public function update(Request $req, ObjectService $data)
    {      
      return $data->update($req);
    }

    public function delete($id, ObjectService $data)
    {      
      return $data->delete($id);     
    }  
}