<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Order_item;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\checkoutRequest;


class CheckoutController extends Controller
{
      
 
    public function checkout(){
         

      // $product_id = $request->product_id;
      // $cart = Cart::where('product_id',$product_id)->where('user_id',Auth::id())->first();   
      // $cart->quantity = $request->qty;
      // $cart->update();
      $items = Cart::where('user_id',Auth::id())->get();
      return view("frontend.cart.checkout",compact('items'));
    }
      

 
    public function  placeorder(checkoutRequest $request){
    
    //   Details Order
        $order = new Order();
        $order->user_id = Auth::id();
        $order->fname   = $request->first_name;
        $order->lname   = $request->last_name;
        $order->email   = $request->email;
        $order->phone   = $request->phone_number;
        $order->address1   = $request->address_1;
        $order->address2   = $request->address_2;
        $order->city   = $request->city;
        $order->state   = $request->state;
        $order->country   = $request->country;
        $order->pincode   = $request->pin_code;



        // To calc Total Number
        $total = 0 ;
        $cartitem_total = Cart::where('user_id',Auth::id())->get();
        foreach($cartitem_total as $prod){
          $total  += $prod->product->selling_price * $prod->quantity;
        }
        $order->total_price   =   $total ;  
        // End calc
        $order->tracking_no   = 'sharma'.rand(1111,9999);
        $order->save();
       
     
        
      //  Item Order Require  
        $cartitem = Cart::where('user_id',Auth::id())->get();
        foreach($cartitem as $item){
            Order_item::create([
                'order_id'=>$order->id,
                'product_id'=>$item->product_id,
                'qty'=>$item->quantity,
                'price'=>$item->product->selling_price,
            ]);
        }

        // Delete From Cart
       $cartitem = Cart::where('user_id',Auth::id())->get();
          Cart::destroy($cartitem);
        session()->flash('status', "Order Place Successfully");
        return redirect('/');

    }   
     
     
}
