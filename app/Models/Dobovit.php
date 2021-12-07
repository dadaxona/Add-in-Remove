<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dobovit extends Model
{
    use HasFactory;
    protected $table = 'dobovits';
    public $fillable = ['name', 'email', 'password'];
    public $timestamps = false;
}
