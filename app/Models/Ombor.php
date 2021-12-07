<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ombor extends Model
{
    use HasFactory;
    protected $table = 'ombors';
    public $fillable = ['clent', 'idy', 'name', 'soni', 'narx2'];
    public $timestamps = false;
}