<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Istoriya extends Model
{
    use HasFactory;
    protected $table = 'istoriyas';
    public $fillable = ['id','clent','file','name','son','narx2','summa'];
    public $timestamps = true;
}