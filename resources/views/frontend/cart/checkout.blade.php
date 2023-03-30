@extends('layouts.frontend')


@section('title')

E-Shop

@endsection





@section('content')











<!-- Start navbar -->

@include('frontend.nav')

<!-- end Slider -->







<nav class="navbar navbar-light  bg-warning">
  <div class="container">
    <span class="navbar-brand mb-0 h1">E-Shop</span>


  
<h6 class="mb-0">
    <a href="{{url('/')}}">Home</a> /
    <a href="{{url('checkout')}}">Checkout</a>

</h6>


   
      


     
  </div>
</nav>







<div class="container mt-5">


  

 
<div class="row">



<div class="col">



<div class="row shadow p-5">

<h5>Basic Details</h5>

 
<hr>

<div class="col-md-6">
 


<label for="">Frist Name</label>
<input type="text" name="first_name" class="form-control" placeholder="FristName">
</div><!--end col -->

<div class="col-md-6">
<label for="">Frist Name</label>
<input type="text" name="first_name" class="form-control" placeholder="FristName">
</div><!--end col -->
<div class="col-md-6">
<label for="">Frist Name</label>
<input type="text" name="first_name" class="form-control" placeholder="FristName">
</div><!--end col -->
<div class="col-md-6">
<label for="">Frist Name</label>
<input type="text" name="first_name" class="form-control" placeholder="FristName">
</div><!--end col -->
<div class="col-md-6">
<label for="">Frist Name</label>
<input type="text" name="first_name" class="form-control" placeholder="FristName">
</div><!--end col -->
<div class="col-md-6">
<label for="">Frist Name</label>
<input type="text" name="first_name" class="form-control" placeholder="FristName">
</div><!--end col -->
<div class="col-md-6">
<label for="">Frist Name</label>
<input type="text" name="first_name" class="form-control" placeholder="FristName">
</div><!--end col -->
<div class="col-md-6">
<label for="">Frist Name</label>
<input type="text" name="first_name" class="form-control" placeholder="FristName">
</div><!--end col -->
<div class="col-md-6">
<label for="">Frist Name</label>
<input type="text" name="first_name" class="form-control" placeholder="FristName">
</div><!--end col -->
<div class="col-md-6">
<label for="">Frist Name</label>
<input type="text" name="first_name" class="form-control" placeholder="FristName">
</div><!--end col -->




</div> <!--end  row -->






</div><!--end col -->



<div class="col">


 
  
   <h5>Order Details</h5>
 
    <hr>

    <table class="shadow text-center table table-striped">


 
    <tr>
     
      <th scope="col">Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
    </tr>
  




 


<button class="bisplay-block">sss</button>
    </table>






</div> <!--end col -->





</div> <!--end  main row -->
 




  
 
  
 

</div>



@endsection