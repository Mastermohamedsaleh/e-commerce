<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Frontend\FrontController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;


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








define('PAGINATE_COUNT' , 1 );


Auth::routes();

Route::get('/', [frontController::class, 'index']);


Route::controller(FrontController::class)->group(function() { 
 
 Route::get('category/{slug}' , 'category' );
 Route::get('category/{cate_slug}/{prod_slug}' , 'product' );
   
   
});



// Order User

Route::controller(UserController::class)->group(function(){ 

  // View all My Order To user
  Route::get('all_my_order','index');

  // View What he requried
  Route::get('vieworder/{id}','vieworder');

});



// Order Admin


Route::controller(OrderController::class)->group(function(){ 

 
  // Show All Orders
  Route::get('orders','index');

  Route::get('view_to_order/{id}','vieworder');

  Route::post('update_status_order/{id}','updatestatus');

 

});



// Cart 

Route::controller(CartController::class)->group(function(){
  Route::post('/add-to-cart','addtocart');
  Route::get('/viewcart', 'viewcart');
  // Delete Item From Cart
  Route::post('delete-in-cart/{id}', 'delete_item');
});



// Checkout

Route::controller(CheckoutController::class)->group(function(){

Route::get('checkout', 'checkout');
Route::post('placeorder' , 'placeorder');


});


Route::middleware(['auth','admincheck'])->group(function(){
    Route::get('/dashboard',function(){
      return view('admin');
    });


    Route::resource('categories',CategoryController::class);
    Route::resource('products',ProductController::class);

});


 
