<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\OOPServiceProject;

class KarzinaController extends Controller
{
    public function index($clent, OOPServiceProject $data)
    {       
        return $data->get($clent);             
    }

    public function show(Request $request, OOPServiceProject $data)
    {
        $request->validate([
            'son'=>'required',
            'clent'=>'required',
            'idy'=>'required'                
        ]);
        return $data->create($request);             
    }
    public function delete($id, OOPServiceProject $data)
    {
        return $data->delete($id);
    }

    public function store(Request $request, OOPServiceProject $data)
    {
        return $data->store($request);
    } 
    public function karz(OOPServiceProject $data)
    {
        return $data->karz();      
    }

    public function istor($id, OOPServiceProject $data)
    {
        return $data->show($id);
    }
}