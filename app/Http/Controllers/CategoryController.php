<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class CategoryController extends Controller
{
 
    public function index()
    {

 
        $categories = Category::latest()->paginate(PAGINATE_COUNT);

        return view('admins.categories.index',compact('categories'));
    }

   
    public function create()
    {
        return view('admins.categories.create');
    }

  
    public function store(Request $request)
    {
        
        $category = new Category();

        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().".".$ext;
            $file->move(public_path('uploads/categories'),  $filename );

            $category->image = $filename;

        }


      
            $category->name = $request->name;
            $category->slug = $request->slug;
            $category->description = $request->description;
     
            $category->save();

                     
        session()->flash('status', 'added successfully');
        return redirect()->route('categories.index');




    }

   
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
     
        $category = Category::findOrfail($id);

        return view('admins.categories.edit',compact('category'));


    }


    public function update(Request $request , $id)
    {
        

        
        $category = Category::findOrfail($id);

        if($request->hasfile('image')){
            $path = 'uploads/categories/'.$request->old_image;
            if(File::exists($path)){
                File::delete($path);
            }
            $imageName = time().'.'.$request->image->extension(); 

            $product->image = $imageName;
             
            $category->image->move(public_path('uploads/products'), $imageName);

        }



        $category->update([
            'name'=>$request->name,
            'slug'=>$request->slug,
            'description'=>$request->description,
            'status'=>$request->status  == True ? '1' : '0' ,
            'popular'=>$request->popular == True ? '1' : '0' ,
        ]);
                     
        session()->flash('status', 'Udpate successfully');
        return redirect()->route('categories.index');

    }

    public function destroy($id)
    {
         
       
         $category =  Category::findorfail($id);
         
         $category->delete();
         
         session()->flash('status', 'Delete successfully');
         return redirect()->route('categories.index');

    }
}
