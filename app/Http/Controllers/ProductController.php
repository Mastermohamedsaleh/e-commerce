<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Product;
use File;



class ProductController extends Controller
{
   
    public function index()
    {
        $products = Product::latest()->paginate(PAGINATE_COUNT);

        return view('admins.products.index',compact('products'));

    }

 
    public function create()
    {
        $categories = Category::all();
        return view('admins.products.create' , compact('categories')); 
    }

 
    public function store(Request $request)
    {
         
     
        $products = new Product();

        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().".".$ext;
            $file->move(public_path('uploads/products'),  $filename );

            $products->image = $filename;

        }
          


        $products->category_id = $request->category_id; 
        $products->name=$request->name;
        $products->slug=$request->slug;
        $products->description=$request->description;
        $products->small_description=$request->small_description;
        $products ->trending=$request->trending == True ? '1' : '0' ;
        $products->original_price = $request->original_price;
        $products->selling_price = $request->selling_price;

        $products->qty = $request->quantity;
      
    
        $products->save();

                     
        session()->flash('status', 'added successfully');
        return redirect()->route('products.index');
         
 
         
    }

    public function show($id)
    {
        //
    }

  
    public function edit($id)
    {
        $categories = Category::all();

        $product = Product::findOrfail($id);

        return view('admins.products.edit',compact('product','categories'));

    }

 
    public function update(Request $request, $id)
    {
         


       $product = Product::findorfail($id);

         
        if($request->hasfile('image')){
            $path = 'uploads/products/'.$request->old_image;
            if(File::exists($path)){
                File::delete($path);
            }
            $imageName = time().'.'.$request->image->extension(); 

            $product->image = $imageName;
             
           $request->image->move(public_path('uploads/products'), $imageName);

        }

        $product->category_id = $request->category_id; 
        $product->name=$request->name;
        $product->slug=$request->slug;
        $product->description=$request->description;
        $product->small_description=$request->small_description;
        $product->status=$request->status  == True ? '1' : '0' ;
        $product ->trending=$request->trending == True ? '1' : '0' ;
        $product->original_price = $request->original_price;
        $product->selling_price = $request->selling_price;
        $product->tax = $request->tax;
        $product->qty = $request->quantity;
      
    
        $product->update();

                     
        session()->flash('status', 'Update successfully');
        return redirect()->route('admins.products.index');
         
        
         

    }

 
    public function destroy(Request $request,$id)
    {

        $product =  Product::findorfail($id); 

        if(File::exists(public_path('uploads/products/'.$request->old_image))){
            File::delete(public_path('uploads/products/'.$request->old_image));
            }
         

        $product->delete();
        session()->flash('status', 'Delete successfully');
        return redirect()->route('admins.products.index');
    }
}
