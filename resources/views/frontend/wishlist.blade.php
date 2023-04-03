@extends('layouts.frontend')


@section('title')

E-Shop

@endsection





@section('content')



<!-- Start navbar -->

@include('frontend.nav')

<!-- end Slider -->





<div class="container mt-5">






<div class="row">

   
@if($wishlists->count() > 0 )



@foreach($wishlists as $wishlist)
<div class="col-md-6">


<div class="card" style="width: 18rem;">
  <img src="{{asset('uploads/products/'.$wishlist->product->image)}}" class="card-img-top" alt="...">


  <div class="card-body text-center">
    
    <a href="#" class="btn btn-sm  btn-primary">View</a>


    <form action="{{url('delete-from-wishlist',$wishlist->id)}}" method="post" style="display:inline-block">
      @csrf
    <button class="btn btn-sm  btn-danger" >Remove</button>

    </form>

  </div>
</div>


</div> <!-- End col one -->
@endforeach

@else

<h1 class="text-center text-danger">No Found Wishlist :) </h1>

@endif







</div> <!-- End row -->









</div> <!-- end container --> 
