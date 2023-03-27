@extends('layouts.frontend')


@section('title')

E-Shop

@endsection





@section('content')





<!-- Start navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Categories
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            @foreach($categories  as $category)
            <li><a class="dropdown-item" href="{{url('category/'.$category->slug)}}">{{$category->name}}</a></li>
            @endforeach
          </ul>
        </li>




        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>







   




      </ul>
    </div>
  </div>
</nav>
<!-- end navbar -->




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







