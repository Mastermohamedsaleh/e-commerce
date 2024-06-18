<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

use App\Payment\PaymentInterface;

use App\Http\Requests\checkoutRequest;


class PaymentController extends Controller
{

    protected $payment;

    public function __construct(PaymentInterface  $payment){

       $this->payment = $payment;

    } 

    public function index(Request $request){
       
      return $this->payment->index($request); 

    }

    public function success(Request $request){ 
      return $this->payment->paymentSuccess($request);
    }


}


