<?php

namespace App\Http\Controllers;

use App\Models\Pending2;
use Illuminate\Http\Request;

class DelController extends Controller
{
    public function index()
    {
        return Pending2::get();
    }

    public function post(Request $req)
    {
        $delivery = new Pending2();
        $delivery->plate_no = $req->plateNo;
        $delivery->gross_weight = $req->grossWeight;
        $delivery->cust_name = $req->custName;
        $delivery->commodity = $req->commodity;
        $delivery->date = $req->date;
        $delivery->entry_time = $req->entryTime;
        $delivery->save();
    }

    public function destroy(Request $req)
    {
        Pending2::where('plate_no' , $req->plateNo)->delete();
    }
}
