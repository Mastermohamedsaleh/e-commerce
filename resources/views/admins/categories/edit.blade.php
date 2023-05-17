@extends('admin')


@section('content')





<div class="card">

<div class="card-header">
<h2 class="text-center text-primary">Edit Category</h2>
</div>
<!-- end card header -->


<div class="card-body">




<form action="{{route('categories.update' ,$category->id)}}" method="post">
    @csrf
    {{ method_field('put') }}
<!-- Start Row -->
<div class="row">




<div class="col-md-6 mt-2">

<label for="">Name</label>
<input type="text" class="form-control" name="name" value=" {{ $category->name }} "> 
 

</div>


<div class="col-md-6 mt-2">

<label for="">Slug</label>
<input type="text" class="form-control" name="slug" value=" {{ $category->slug }} ">
</div>







<div class="col-md-6 mt-2">

<label for="">Status</label>
<input type="checkbox" name="status"  {{ $category->status == '1' ? 'checked' : '' }} >
</div>


<div class="col-md-6 mt-2">
<label for="">Popular</label>
<input type="checkbox" name="popular" {{ $category->popular == '1' ? 'checked' : '' }}  >
</div>


<div class="col-md-6 mt-2">

<label for="">Description</label>
 <textarea cols="20" rows="5"  class="form-control" name="description" >{{ $category->description }} </textarea>
</div>







<div class="col-md-6 mt-2">
<button class="btn btn-primary">Edit</button>
</div>





</div><!-- End Row -->
</form>










</div>
<!-- end Card body -->




</div>
<!-- End card -->












@endsection