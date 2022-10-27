<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class LoginController extends Controller
{
   public function search(Request $req)
   {
    $result = DB::select('select * from `registered_users` where `username` = ? and password = ?', [$req->userName,$req->passWord]);
      if($result != null)
      {
        echo 'User authenticated';
      }
   }
   public function test(Request $req)
   {
     echo json_encode($req->test);
   }
}
