@extends('admin')


@section('content')








<div class="card">


<div class="card-header">
<h2 class="text-center text-primary">Add product</h2>

</div>
<!-- end card header -->



<div class="card-body">




<form action="{{route('products.update',$product->id)}}" method="post" enctype="multipart/form-data">
    @csrf

    {{ method_field('put') }}
<!-- Start Row -->
<div class="row">


@if($categories)
@foreach($categories as $category)
<div class="col-12 mt-2" >

<select name="category_id"  >
    <option value="{{$category->id}}">{{$category->name}}</option>
</select>

</div>
@endforeach


@else
<select >
    <option  >No Category</option>
</select>


@endif



<div class="col-md-6 mt-2">

<label for="">Name</label>
<input type="text" class="form-control" name="name" value="{{ $product->name }} "> 
 

</div>


<div class="col-md-6 mt-2">

<label for="">Slug</label>
<input type="text" class="form-control" name="slug" value="{{ $product->slug }} ">
</div>







<div class="col-md-6 mt-2">

<label for="">Status</label>
<input type="checkbox" name="status" {{ $product->status == '1' ? 'checked' : '' }} >
</div>


<div class="col-md-6 mt-2">
<label for="">Trending</label>
<input type="checkbox" name="trending"  {{ $product->trending == '1' ? 'checked' : '' }} >
</div>


<div class="col-md-6 mt-2">

<label for="">Description</label>
 <textarea cols="20" rows="5"  class="form-control" name="description" >{{ $product->description}} </textarea>
</div>

<div class="col-md-6 mt-2">

<label for="">Small Description	</label>
 <input  class="form-control" name="small_description" value="{{$product->small_description}}">
</div>



<div class="col-md-6 mt-2">

<label for="">Meta Discrip</label>
<input type="text" class="form-control" name="meta_description" value="{{$product->meta_description}}"> 
 

</div>

<div class="col-md-6 mt-2">
<label for="">Meta Title</label>
<input type="text" class="form-control" name="meta_title" value="{{$product->meta_title}}">
</div>


<div class="col-md-6 mt-2">
<label for="">Meta Keywords</label>
<input type="text" class="form-control" name="meta_keywords" value="{{$product->meta_keywords}}">
</div>


<div class="col-md-6 mt-2">
<label for="">Original Price</label>
<input type="number" min="1" class="form-control" name="original_price" value= "{{$product->original_price}}">
</div>

<div class="col-md-6 mt-2">
<label for="">Selling Price</label>
<input type="number" min="1" class="form-control" name="selling_price" value="{{$product->selling_price}}">
</div>

<div class="col-md-6 mt-2">
<label for="">Tax</label>
<input type="number" min="1" class="form-control" name="tax" value="{{$product->tax}}">
</div>

<div class="col-md-6 mt-2">
<label for="">Quantity</label>
<input type="number" min="1" class="form-control" name="quantity" value="{{$product->qty}}">
</div>

<div class="col-md-6 mt-2">
<label for="">Image</label>
<input type="file"  class="form-control" name="image" >
</div>




<div class="col-12 mt-2">

<img src="{{asset('uploads/products/'.$product->image)}}" style="width:300px" >

<input type="hidden" name="old_image" value="{{$product->image}}" >
</div>



<div class="col-md-6 mt-2">
<button class="btn btn-primary">Update</button>
</div>








</div><!-- End Row -->
</form>













</div>
<!-- end card body -->



</div>
<!-- End Card -->













@endsection