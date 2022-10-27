<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;
use Symfony\Component\HttpKernel\Event\RequestEvent;

class CustomerController extends Controller
{
    public function index()
    {
        return Customers::orderBy('cust_name','asc')->get();
    }

    public function post(Request $req)
    {
        $customer = new Customers();
        $customer->cust_name = $req->custName;
        $customer->save();
    }
}
