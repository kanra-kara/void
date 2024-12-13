<?php

use Illuminate\Support\Facades\Route;
//ContactControllerでサイトの行き来と、データのやり取りで使うために読み込み
use App\Http\Controllers\ContactController;

//URLを決める
Route::get('/', [ContactController::class, 'index']);

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