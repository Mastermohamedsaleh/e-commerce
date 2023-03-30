@extends('layouts.frontend')


@section('title')

E-Shop

@endsection





@section('content')



<!-- Start navbar -->

@include('frontend.nav')

<!-- end Slider -->



<!-- Start Slider -->





<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('frontend/image/mailchimp-Hv9CS6KZayQ-unsplash.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('frontend/image/mailchimp-Hv9CS6KZayQ-unsplash.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('frontend/image/mailchimp-Hv9CS6KZayQ-unsplash.jpg')}}" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>



<!-- End slider -->



<!-- content -->





<div class="p-5">
<div class="container">








<div class="row">
@foreach($products as $product)

<div class="col-md-3">


<div class="card" style="width: 100%;">
<img src="{{asset('uploads/products/'.$product->image)}}" alt="" style = "width:100% ; height:300px">
  <div class="card-body">
   {{$product->name}}

   <div class="row">

<div class="col">
    {{$product->selling_price}}
</div><!-- end col  -->

<div class="col">
 <s> {{$product->original_price}}</s>
</div> <!-- end col  -->


   </div>   <!-- end Row  --> 



  </div>
</div>

    <!-- end col -->
</div>
@endforeach

<!-- end row -->
</div>  































<!-- end content -->





@endsection







