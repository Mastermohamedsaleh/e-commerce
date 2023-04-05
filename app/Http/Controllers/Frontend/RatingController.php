<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Rating;
use Illuminate\Support\Facades\Auth;


class RatingController extends Controller
{
     
      
    public function add(Request $request){
        
         
          
        $product_id = $request->product_id;
        $rating = $request->rating;

        
        $product_check = Product::where('id',$product_id)->first();

        if($product_check){
          

         $existing_rating = Rating::where('user_id',Auth::id())->where('product_id',$product_id)->first();
            if( $existing_rating){
                $existing_rating->stars = $rating;
                $existing_rating->update();
            }else{
                 Rating::create([
                    'user_id'=>Auth::id(),
                    'product_id'=>$product_id,
                    'stars'=>$rating
                 ]);

            } // end if if user Rating


            session()->flash('status', "Rating Successfully");
            return redirect()->back();

        } // end if check if found product

         
         
    }
     
     
}
