<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeighingRecords extends Model
{
    use HasFactory;
    protected $table = 'weighing_records';
    public $timestamps = false;
}
