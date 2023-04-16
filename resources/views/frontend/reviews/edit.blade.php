@extends('layouts.frontend')


@section('title')

E-Shop

@endsection





@section('content')



<!-- Start navbar -->

@include('frontend.nav')

<!-- end Slider -->







<div class="container">
    


   <div class="card">
<div class="card-header bg-primary text-light rounded text-center">
  
 <h6>You are write a review for {{$review->products->name}}</h6>  
  
</div>


<div class="card-body">








<form action="{{url('update-review')}}" method="post">
    @csrf
<input type="hidden" name="id" value="{{$review->id}}">
<input type="hidden" name="product_id" value="{{$review->product_id}}">

<textarea name="user_review" class="w-100">{{$review->user_review}}</textarea>

<button type="submit" class="btn btn-primary">Update</button>


</form>







</div>


   </div>

 




</div>  <!-- end container-->













@endsection