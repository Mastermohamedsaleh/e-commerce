<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Frontend\FrontController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Frontend\WishlistController;
use App\Http\Controllers\Frontend\RatingController;
use App\Http\Controllers\Frontend\ReviewController;
use App\Http\Controllers\Frontend\AccountController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;


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
 Route::get('category/{cate_slug}/{prod_slug}' , 'product' )->name('category/{cate_slug}/{prod_slug}');
   
   
});


// Search product


Route::controller(FrontController::class)->group(function() { 

  Route::get('product-list' , 'productlist')->name('product-list');
  Route::post('searchproduct' , 'searchproduct')->name('searchproduct');



});






// Change my account
Route::middleware(['auth'])->group(function(){ 

  Route::get('my_account',  [AccountController::class , 'index']);
Route::post('update_account', [AccountController::class , 'update']);

});







// Order User

Route::controller(UserController::class)->group(function(){ 

  // View all My Order To user
  Route::get('all_my_order','index');

  // View What he requried
  Route::get('vieworder/{id}','vieworder');

});




// Wishlist

// Route group
Route::middleware('auth')->group(function () {
  Route::get('/wishlist', [WishlistController::class, 'index']);
  Route::post('/add-to-wishlist', [WishlistController::class, 'add']);
  Route::post('/delete-from-wishlist/{id}', [WishlistController::class, 'delete']);
  // Count wishlist
});
 
Route::get('/load-wishlist-data', [WishlistController::class, 'countwishlist']);



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
  // Count Item in Cart
  Route::get('/load-cart-data', 'cartcount');
  // Delete Item From Cart
  Route::post('delete-in-cart/{id}', 'delete_item');
});



// Checkout

Route::controller(CheckoutController::class)->group(function(){

Route::get('checkout', 'checkout');
Route::post('placeorder' , 'placeorder');


});



// Payment

Route::get( 'payment/{total_price}',[PaymentController::class , 'index']);
// Route::get( 'payment.post',[PaymentController::class , 'post'])->name('payment.post');

Route::get('successpayment',[PaymentController::class,'success'])->name('successpayment');
Route::get('canclepayment',[PaymentController::class,'cancle'])->name('canclepayment');



// Review   


Route::middleware(['auth'])->group(function(){

  Route::controller(ReviewController::class)->group(function(){
       Route::get('add-review/{product_slug}','add');
       Route::post('create-review','create');
       Route::get('edit-review/{product_slug}','edit');
       Route::post('update-review','update');
  });

});





// Rating



Route::post('rating',[RatingController::class ,  'add']);




Route::middleware(['auth','admincheck'])->group(function(){
    Route::get('/dashboard',function(){
      return view('admin');
    });


    Route::resource('categories',CategoryController::class);
    Route::resource('products',ProductController::class);

});


 
