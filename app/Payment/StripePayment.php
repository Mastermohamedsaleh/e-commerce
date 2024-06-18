<?php

namespace App\Payment;
use Illuminate\Http\Request;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;


class StripePayment implements PaymentInterface{
      

    
    public function index(Request $request){



  $total_price = $request->total_price;


      $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET_KEY'));

       
     $cart_items =  Cart::where('user_id',Auth::id())->get();
          

     foreach($cart_items as $item){
      
         
        $lineitems[]  =  [
                      'price_data' => [
                        'currency' => 'usd',
                        'product_data' => [
                          'name' =>  $item->product->name,
                        ],
                        'unit_amount' => $total_price * 100,
                      ],
                      'quantity' => $item->quantity,
                    ];

     }
    
         
        $checkout_session = $stripe->checkout->sessions->create([
            'line_items' =>  $lineitems,
            'mode' => 'payment',
            'success_url' => route('successpayment' , [] , true),
            'cancel_url' => route('canclepayment' , [] , true),
          ]);






    return redirect($checkout_session->url);





    //   return view('frontend.cart.payment',compact('total_price'));
    }




    public function paymentSuccess(Request $request){
 
        return view('frontend.cart.successpayment');
 
    }


    public function paymentCancel(Request $request){

    }
 
    
     
}