<?php

use App\Http\Controllers\ResultController;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Route;
use LDAP\Result;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [ResultController::class,'index']);
Route::post('/get-result', [ResultController::class,'getResultQuery'])->name('result');