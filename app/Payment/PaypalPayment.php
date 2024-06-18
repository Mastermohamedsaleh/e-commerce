<?php

namespace App\Payment;


use Illuminate\Http\Request;

use Srmklive\PayPal\Services\ExpressCheckout;

use App\Models\Cart;
use App\Models\order;

use Illuminate\Support\Facades\Auth;


class PaypalPayment implements PaymentInterface{
      
    public function index(Request $request)
    {
         
    $cart_items =  Cart::where('user_id',Auth::id())->get();
          
     $product = [];
    
     foreach($cart_items as $item){
    
        $product['items'] = [
               'data' => [
                'name' => $item->product->name,
                'price' => $item->product->selling_price,
                'desc'  => '',
                'qty' => $item->quantity
               ]
         ];
    }
      
        $product['invoice_id'] = 1;
        $product['invoice_description'] = "Order #{$product['invoice_id']} Bill";
        $product['return_url'] = route('success.payment');
        $product['cancel_url'] = route('cancel.payment'); 
        $product['total'] = $request->total_price;
  
        $paypalModule = new ExpressCheckout;
  
        $res = $paypalModule->setExpressCheckout($product);
        $res = $paypalModule->setExpressCheckout($product, true);
        return redirect($res['paypal_link']);

    }
   
    public function paymentCancel(Request $request)
    {
        dd('Your payment has been declend. The payment cancelation page goes here!');
    }
  
    public function paymentSuccess(Request $request)
    {

return $request;


        $paypalModule = new ExpressCheckout;
        $response = $paypalModule->getExpressCheckoutDetails($request->token);
        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {


            $order = new Order();
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
            $order->payment_mode = 'payment by paypal';
            $order->save();


            dd('Payment was successfull. The payment success page goes here!');
       




        }
  
        dd('Error occured!');
    }

     
}