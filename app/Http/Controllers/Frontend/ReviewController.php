<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Order;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;



class ReviewController extends Controller
{




    public function add($product_slug){
        


        $product_check = Product::where('slug',$product_slug)->first();

        if($product_check){
             
            $product_id  = $product_check->id;
 


            // Only customer prushed can write review
            $verified_purchase = Order::where('orders.user_id' , Auth::id())
            ->join('order_items','orders.id','order_items.order_id')
            ->where('order_items.product_id',$product_id)->get();
            // Only customer prushed can write review
              

            return view('frontend.reviews.index',compact('product_slug','product_check','verified_purchase'));

        }else{

            return redirect()->back()->with(['status'=>'The link you followed was broken']);
        }



         
    }



    public function create(Request $request){
          
         

 
      $product = Product::where('id',$request->product_id)->first();

      if($product){

        $user_review = $request->user_review;

        Review::create([
            'user_id'=>Auth::id(),
            'product_id'=>$request->product_id,
            'user_review'=>$user_review
        ]);


        $category_slug = $product->category->slug;
        $product_slug = $product->slug;

        if($user_review){
            return redirect('category/'.$category_slug.'/'.$product_slug)->with(['status'=>'Thank you for writing a review']);
        } 


    



      }

 
   
          
          
         
    }

    public function edit($product_slug){
          
       $product = Product::where('slug',$product_slug)->first();

       if($product){
           $review = Review::where('user_id',Auth::id())->where('product_id',$product->id)->first();

           if($review){
             return view('frontend.reviews.edit',compact('review'));
           }else{
 
            return redirect()->back();

           }

        }
    }

    public function update(Request $request){
 
        $user_review = $request->user_review;

     if( $user_review !=  ""){
         $review = Review::where('id',$request->id)->where('user_id',Auth::id())->first();


         if($review){
           $review->user_review = $request->user_review;
           $review->update();
           return redirect()->back()->with('status','Update Successflly');
         }else{
            return redirect()->back()->with('status','The link you followed waas broken');
         }


     }else{
        return redirect()->back()->with('status','You must write Any think');
     } 
 
          
         
         
    }


}
