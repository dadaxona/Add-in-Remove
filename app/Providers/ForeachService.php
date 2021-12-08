<?php

namespace App\Providers;

use App\Providers\StopService;
use App\Models\Todo;
use App\Models\Dobovit;
class ForeachService extends StopService
{
    protected $lesson;

    public function __construct(Todo $oop)
    {
        $this->lesson=$oop;
    }
    
    public function create($request){       
        return $this->lesson->create($request);       
    }

    public function store($request)
    {
        $dobovit = app()->make(OOPService::class);
        foreach ($request->addmore as $key => $value) {
           $dobovit->create($value);         
        }  
        return back()->with('success', 'Record Created Successfully.');
    }
}
