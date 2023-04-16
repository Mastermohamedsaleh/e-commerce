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
  
 <h6>You are write a review for {{$product_slug}}</h6>  
  
</div>


<div class="card-body">







@if($verified_purchase->count() > 0 )

<form action="{{url('create-review')}}" method="post">
    @csrf
<input type="hidden" name="product_id" value="{{$product_check->id}}">
<textarea name="user_review" class="w-100"></textarea>

<button type="submit" class="btn btn-primary">Add</button>


</form>
@else

<div class="alert alert-danger">
    <h5>You are eligble to review this product</h5>
    <p>
        Only customers who purchased the product can write a review about the product
    </p>

    <a href="{{url('/')}}" class="btn btn-primary">Go to home Page</a>
</div>

@endif






</div>


   </div>

 




</div>  <!-- end container-->













@endsection