<?php

namespace App\Payment;

use Illuminate\Http\Request;


interface PaymentInterface{

      
    public function index(Request $request);

    public function paymentCancel(Request $request);

    public function paymentSuccess(Request $request);


     
}