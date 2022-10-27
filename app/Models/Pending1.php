<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pending1 extends Model
{
    use HasFactory;
    protected $table = 'queue1';
    public $timestamps = false;
}
