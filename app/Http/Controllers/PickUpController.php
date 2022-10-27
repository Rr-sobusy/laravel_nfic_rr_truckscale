<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pending1;

class PickUpController extends Controller
{
    public function index()
    {
       return $pickup = Pending1::get();   
    }

    public function post(Request $req)
    {
        $pickup = new Pending1();
        $pickup->plate_no = $req->plateNo;
        $pickup->gross_weight = $req->grossWeight;
        $pickup->cust_name = $req->custName;
        $pickup->commodity = $req->commodity;
        $pickup->date = $req->date;
        $pickup->entry_time = $req->entryTime;
        $pickup->save();
    }

    public function destroy(Request $req)
    {
        Pending1::where('plate_no', $req->plateNo)->delete();
    }
}
