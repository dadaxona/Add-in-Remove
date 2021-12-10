<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Istoriyasumma extends Model
{
    use HasFactory;
    protected $table = 'istoriyasummas';
    public $fillable = ['idd','clent','idy','istorisumma'];
    public $timestamps = true;
}