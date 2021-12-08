<?php

namespace App\Providers;

use App\Providers\StopService;
use App\Models\Dobovit;


class OOPService extends StopService
{
   protected $model;

   public function __construct(Dobovit $oop)
   {
       $this->model=$oop;
   }
}
