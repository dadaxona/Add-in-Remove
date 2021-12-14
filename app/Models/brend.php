<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class brend extends Model
{
    use HasFactory;
    protected $table = 'brends';
    public $fillable = ['name','email','password','code'];
    public $timestamps = false;
}
