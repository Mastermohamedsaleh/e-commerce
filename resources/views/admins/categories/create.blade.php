@extends('admin')


@section('content')









<div class="card">


<div class="card-header">
<h2 class="text-center text-primary">Add Category</h2>

</div>
<!-- end card header -->



<div class="card-body">




<form action="{{route('categories.store')}}" method="post" enctype="multipart/form-data">
    @csrf
<!-- Start Row -->
<div class="row">

<div class="col-md-6 mt-2">

<label for="">Name</label>
<input type="text" class="form-control" name="name" placeholder="Name"> 
 

</div>


<div class="col-md-6 mt-2">

<label for="">Slug</label>
<input type="text" class="form-control" name="slug" placeholder="slug">
</div>








<div class="col-md-6 mt-2">

<label for="">Description</label>
 <textarea cols="20" rows="5"  class="form-control" name="description" placeholder="Description"></textarea>
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