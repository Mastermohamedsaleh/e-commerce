<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Frontend\FrontController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\CartController;


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


Route::controller(FrontController::class)->group(function() { 
 
 Route::get('category/{slug}' , 'category' );
 Route::get('category/{cate_slug}/{prod_slug}' , 'product' );
   
   
});





// Cart 

Route::controller(CartController::class)->group(function(){
  Route::post('/add-to-cart','addtocart');
  Route::get('/viewcart', 'viewcart');
  // Delete Item From Cart
  Route::post('delete-in-cart/{id}', 'delete_item');
});



// Checkout

Route::get('checkout',[CheckoutController::class , 'checkout']);



Route::middleware(['auth','admincheck'])->group(function(){
    Route::get('/dashboard',function(){
      return view('admin');
    });


    Route::resource('categories',CategoryController::class);
    Route::resource('products',ProductController::class);

});


 
