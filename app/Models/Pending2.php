<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pending2 extends Model
{
    use HasFactory;
    protected $table = "queue2";
    public $timestamps = false;
}
