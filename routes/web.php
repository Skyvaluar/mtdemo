<?php

use App\Http\Controllers\PartialViewControllers\DataOneController;
use App\Http\Controllers\PartialViewControllers\DataTwoController;
use App\Http\Controllers\PartialViewControllers\DataThreeController;
use Illuminate\Support\Facades\Route;

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

// Default route
Route::get('/', function () {
    return view('welcome');
});


// Partial table data controllers. Used to get table data
Route::resource('/data-tab-one', DataOneController::class)->only(['index']);
Route::resource('/data-tab-two', DataTwoController::class)->only(['index']);
Route::resource('/data-tab-three', DataThreeController::class)->only(['index']);