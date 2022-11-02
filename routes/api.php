<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\PickUpController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DelController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RawmatController;
use App\Http\Controllers\ReceivingReportController;
use App\Http\Controllers\WeighingRecordsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::controller(PickUpController::class)->group(function () {
    Route::get('/pending1','index');
    Route::post('/postpendingpickup','post');
    Route::post('/deletepickup','destroy');
    Route::get('/countpending1','count');
});

Route::controller(CustomerController::class)->group(function () {
    Route::get('/getcustomers','index');
    Route::post('/postnewcustomer','post');
});

Route::controller(ProductController::class)->group(function () {
    Route::get('/getproducts','index');
    Route::post('/postnewproduct','post');
});

Route::controller(RawmatController::class)->group(function () {
    Route::get('/getrawmats','index');
    Route::post('/postnewmaterial','post');
});

Route::controller(DelController::class)->group(function () {
    Route::get('/pending2','index');
    Route::post('/postpendingdelivery','post');
    Route::post('/deletedelivery','destroy');
    Route::get('/countpending2','count');
});

Route::controller(WeighingRecordsController::class)->group(function () {   
    Route::post('/postweighingrecords','post');
    Route::get('/getweighingrecords','index');
    Route::get('/countweighed','count');
});

Route::post('/authenticateuser', [LoginController::class, 'search']);

Route::controller(ReceivingReportController::class)->group(function () {   
    Route::post('/postreceivingreportrecords','post');
    Route::get('/getreceivingreportrecords','index');
    Route::get('/countreceived','count');
});
