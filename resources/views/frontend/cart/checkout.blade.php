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
<label for="">Last Name</label>
<input type="text" name="last_name" class="form-control" placeholder="LastName">
</div><!--end col -->

<div class="col-md-6">
<label for="">Address 1</label>
<input type="text" name="Address_1" class="form-control" placeholder="Address 1">
</div><!--end col -->
<div class="col-md-6">
<label for="">Address 2</label>
<input type="text" name="Address_2" class="form-control" placeholder="Address 2">
</div><!--end col -->



<div class="col-md-6">
<label for="">Email</label>
<input type="email" name="email" class="form-control" placeholder="Email">
</div><!--end col -->

<div class="col-md-6">
<label for="">Phone Number</label>
<input type="text" name="phone_number" class="form-control" placeholder="Phone Number">
</div><!--end col -->
<div class="col-md-6">
<label for="">City</label>
<input type="text" name="city" class="form-control" placeholder="City">
</div><!--end col -->
<div class="col-md-6">
<label for="">State</label>
<input type="text" name="state" class="form-control" placeholder="State">
</div><!--end col -->
<div class="col-md-6">
<label for="">Country</label>
<input type="text" name="country" class="form-control" placeholder="Country">
</div><!--end col -->
<div class="col-md-6">
<label for="">Pin Code</label>
<input type="text" name="pin_code" class="form-control" placeholder="Pin Code">
</div><!--end col -->




</div> <!--end  row -->






</div><!--end col -->



<div class="col">


 


<div class="card shadow p-2">

<h5>Order Details</h5>

<div class="card-body">


<table class="text-center table table-striped">


 
<tr>
 
  <th scope="col">Name</th>
  <th scope="col">Quantity</th>
  <th scope="col">Price</th>
</tr>




 
@foreach($items as $item)

<tr>


<td>{{$item->product->name}}</td>
<td>{{$item->quantity}}</td>
<td>{{$item->product->selling_price}}</td>


</tr> 


@endforeach









</table>


<hr>

<button class="btn btn-primary  w-100  text-center">Checkout</button>


</div> <!--End card-body -->




</div> <!--End card -->




  

 

 






</div> <!--end col -->





</div> <!--end  main row -->
 




  
 
  
 

</div>



@endsection