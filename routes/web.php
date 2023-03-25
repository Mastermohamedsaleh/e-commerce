<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Frontend\FrontController;



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


define('PAGINATE_COUNT' , 5);

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/',[HomeController::class,'index']);

Auth::routes();

Route::get('/', [frontController::class, 'index']);


Route::middleware(['auth','admincheck'])->group(function(){
    Route::get('/dashboard',function(){
      return view('admin');
    });


    Route::resource('categories',CategoryController::class);
    Route::resource('products',ProductController::class);

});
