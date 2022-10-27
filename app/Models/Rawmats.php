<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rawmats extends Model
{
    use HasFactory;
    protected $table = 'rawmat_names';
    public $timestamps = false;
}
