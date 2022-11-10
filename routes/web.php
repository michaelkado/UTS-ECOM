<?php
use App\Http\Controllers\HomepageController;
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

route::get('/',[HomepageController::class, 'index']);
Route::get('/about', [App\Http\Controllers\HomepageController::class,'about']);
Route::get('/contact', [App\Http\Controllers\HomepageController::class,'contact']);
Route::get('/category', [App\Http\Controllers\HomepageController::class,'category']);
