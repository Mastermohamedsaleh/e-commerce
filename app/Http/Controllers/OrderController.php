<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Order;


class OrderController extends Controller
{
     
   public function index(){

      
      $orders = Order::where('status',0)->latest()->paginate(PAGINATE_COUNT);;
      return view('admins.orders.index',compact('orders'));
   }
     
     
  
//    Admin view order
   public function vieworder($id){
 
    $orders = Order::where('id',$id)->get();

    return view('admins.orders.view',compact('orders'));
       
   }


//    Update Status order 

  public function updatestatus(Request $request,$id){
  
      
     $order = Order::findOrFail($id);
       
     $order->status = $request->status;
     $order->update();

     session()->flash('status', 'Update successfully');
     return redirect()->back();

  }


}
