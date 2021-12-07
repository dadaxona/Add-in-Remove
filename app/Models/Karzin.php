<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karzin extends Model
{
    use HasFactory;
    protected $table = 'karzins';
    public $fillable = ['clent', 'idy', 'file', 'name', 'narx', 'narx2', 'son'];
    public $timestamps = true;
}
