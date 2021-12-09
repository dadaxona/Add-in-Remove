<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jamiyigim extends Model
{
    use HasFactory;
    protected $table = 'jamiyigim';
    public $fillable = ['narx2'];
    public $timestamps = false;
}
