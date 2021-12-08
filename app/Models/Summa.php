<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Summa extends Model
{
    use HasFactory;
    protected $table = 'summas';
    public $fillable = ['clent','idy','summa'];
    public $timestamps = true;
}
