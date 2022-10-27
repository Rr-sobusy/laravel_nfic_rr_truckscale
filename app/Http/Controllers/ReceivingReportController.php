<?php

namespace App\Http\Controllers;

use App\Models\ReceivingReport;
use Illuminate\Http\Request;

class ReceivingReportController extends Controller
{
    public function post(Request $req)
    {
        $rr = new ReceivingReport();
        $rr->receipt_number = $req->receiptNumber;
        $rr->supplier = $req->supplier;
        $rr->po_number = $req->poNumber;
        $rr->dr_no = $req->drNumber;
        $rr->si_no = $req->siNumber;
        $rr->date = $req->date;
        $rr->content = $req->content;
        $rr->save();
    }

    public function index()
    {
        return ReceivingReport::orderBy('receipt_number','desc')->limit(700)->get();
    }
}
