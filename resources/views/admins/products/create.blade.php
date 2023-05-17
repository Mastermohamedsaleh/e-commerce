@extends('admin')


@section('content')








<div class="card">


<div class="card-header">
<h2 class="text-center text-primary">Add product</h2>

</div>
<!-- end card header -->



<div class="card-body">




<form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
    @csrf
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
<input type="text" class="form-control" name="name" placeholder="Name"> 
 

</div>


<div class="col-md-6 mt-2">

<label for="">Slug</label>
<input type="text" class="form-control" name="slug" placeholder="slug">
</div>








<div class="col-md-6 mt-2">
<label for="">Trending</label>
<input type="checkbox" name="trending">
</div>


<div class="col-md-6 mt-2">

<label for="">Description</label>
 <textarea cols="20" rows="5"  class="form-control" name="description" placeholder="Description"></textarea>
</div>

<div class="col-md-6 mt-2">

<label for="">Small Description	</label>
 <input  class="form-control" name="small_description" placeholder="small_description">
</div>


<div class="col-md-6 mt-2">
<label for="">Original Price</label>
<input type="number" min="1" class="form-control" name="original_price" placeholder="Original Price">
</div>

<div class="col-md-6 mt-2">
<label for="">Selling Price</label>
<input type="number" min="1" class="form-control" name="selling_price" placeholder="Selling Price">
</div>


<div class="col-md-6 mt-2">
<label for="">Quantity</label>
<input type="number" min="1" class="form-control" name="quantity" placeholder="Quantity">
</div>




<div class="col-md-6 mt-2">
<label for="">Image</label>
<input type="file" class="form-control" name="image" >
</div>



<div class="col-md-6 mt-2">
<button class="btn btn-primary">Add</button>
</div>








</div><!-- End Row -->
</form>













</div>
<!-- end card body -->



</div>
<!-- End Card -->













@endsection