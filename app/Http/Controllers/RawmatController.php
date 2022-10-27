<?php

namespace App\Http\Controllers;

use App\Models\Rawmats;
use Illuminate\Http\Request;

class RawmatController extends Controller
{
    public function index()
    {
        return Rawmats::orderBy('rawmat_name','asc')->get();
    }

    public function post(Request $req)
    {
        $rawmats = new Rawmats();
        $rawmats->rawmat_name = $req->rawmatName;
        $rawmats->save();
    }
}
