<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;



class CartController extends Controller
{
    
      public function addtocart(Request $request){

        $validated = $request->validate([
          'qty' => 'required|numeric|min:1|max:10',
      ]);
  
        $product_id = $request->product_id;
        $quantity = $request->qty;

        if(Auth::check()){ 
            $prod_check = Product::where('id' , $product_id)->first();
            if($prod_check){
                if(Cart::where('product_id',$product_id)->where('user_id',Auth::id())->exists()){
                  session()->flash('status',$prod_check->name .'added to cart before');
                  return redirect()->back();
                }else{  
                     $cart = new Cart();
                     $cart->product_id = $product_id; 
                     $cart->quantity = $quantity; 
                     $cart->user_id = Auth::id();
                     $cart->save();
                     session()->flash('status',$prod_check->name .'added to cart successfully');
                     return redirect()->back();
                } //end if check in cart or not
            } //end if check product 
        }else{
          session()->flash('status','Please Login to Continue');
          return redirect()->back();
        } // end if check Auth

           
         
         
      }
      
      // Display Cart 

      public function viewcart(){
            
         

        $items = Cart::where('user_id',Auth::id())->get();
        return view("frontend.cart.viewcart" , compact('items'));
          
 

      }

      // Delete item from Cart

      public function delete_item(Request $request , $id){
 
        if(Auth::check()){
             
          if(Cart::where('product_id',$request->product_id)->where('user_id',Auth::id())->exists()){
              
           $item = Cart::where('product_id',$request->product_id)->where('user_id',Auth::id())->first();
          
           $item->delete();

           session()->flash('status','Delete successfully');
           return redirect()->back();
  
          }else{
           return redirect()->back();
          }
 
           
        }else{
          session()->flash('status','Please Login to Continue');
          return redirect()->back();
        } // End if To check if login or not


      }

     //Count Item in cart 
      public function cartcount(){ 
        $countcount =  Cart::where('user_id',Auth::id())->count();       
        return response()->json(['count'=>$countcount]);
      }

}
