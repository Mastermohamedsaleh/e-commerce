@extends('admin')


@section('content')

<form action="{{route('categories.store')}}" method="post">
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

<label for="">Status</label>
<input type="checkbox" name="status">
</div>


<div class="col-md-6 mt-2">
<label for="">Popular</label>
<input type="checkbox" name="popular">
</div>


<div class="col-md-6 mt-2">

<label for="">Description</label>
 <textarea cols="20" rows="5"  class="form-control" name="description" placeholder="Description"></textarea>
</div>



<div class="col-md-6 mt-2">

<label for="">Meta Discrip</label>
<input type="text" class="form-control" name="meta_discrip" placeholder="Meta Discrip"> 
 

</div>

<div class="col-md-6 mt-2">
<label for="">Meta Title</label>
<input type="text" class="form-control" name="meta_title" placeholder="Meta Title">
</div>


<div class="col-md-6 mt-2">
<label for="">Meta Keywords</label>
<input type="text" class="form-control" name="meta_keywords" placeholder="Meta Keywords">
</div>


<div class="col-md-6 mt-2">
<label for="">Meta Description</label>
<input type="text" class="form-control" name="meta_description" placeholder="Meta Description">
</div>

<div class="col-md-6 mt-2">
<button class="btn btn-primary">Add</button>
</div>





</div><!-- End Row -->
</form>










@endsection