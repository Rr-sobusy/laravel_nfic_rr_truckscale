<?php

namespace App\Http\Controllers;

use App\Models\WeighingRecords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WeighingRecordsController extends Controller
{
    public function index()
    {
        return WeighingRecords::select('plate_no','gross_weight','tare_weight','net_weight','customer_name','commodity','entry_time','exit_time','date')->orderBy('ID','desc')->limit(700)->get();
    }

    public function post(Request $req)
    {
        $records = new WeighingRecords();
        $records->plate_no = $req->plateNo;
        $records->gross_weight = $req->grossWeight;
        $records->tare_weight = $req->tareWeight;
        $records->net_weight = $req->netWeight;
        $records->customer_name = $req->customerName;
        $records->commodity = $req->commodity;
        $records->entry_time = $req->entryTime;
        $records->exit_time = $req->exitTime;
        $records->date = $req->date;
        $records->save();
    }

    public function count()
    {
        return WeighingRecords::count();
    }
}
