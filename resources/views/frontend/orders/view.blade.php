



<!-- Start navbar -->

@include('frontend.layouts.nav')

<!-- end Slider -->

















   








<div class="container mt-5">







<div class="card">


<div class="card-header text-center text-light bg-primary">

<h1>Order</h1>


</div><!-- end card-header -->

<a href="{{url('all_my_order')}}" class="float-end  btn btn-warning">Back</a>

<div class="card-body">



<div class="row">




<div class="col">


<h1>Shopping Details</h1>

<hr>
@foreach($orders as $order)

<label class="fw-bold" >First Name</label>
<input type="text" value="{{$order->fname}}" class="form-control" disabled>
<label class="fw-bold">last Name</label>
<input type="text" value="{{$order->lname}}" class="form-control" disabled>
<label class="fw-bold">email</label>
<input type="text" value="{{$order->email}}" class="form-control" disabled>
<label class="fw-bold">Phone</label>
<input type="text" value="{{$order->phone}}" class="form-control" disabled>
<label class="fw-bold">PinCode</label>
<input type="text" value="{{$order->pincode}}" class="form-control" disabled>

<label class="fw-bold">Shipping Address</label>

<div class="border">
    {{$order->address1}},<br>
    {{$order->address2}},<br>
    {{$order->city}},<br>
    {{$order->state}},<br>
    {{$order->country}}
</div>



@endforeach


<label class="fw-bold">Total Price</label>
<input type="text" value="{{$order->total_price}}" class="form-control" disabled>







</div> <!-- End col one -->




<div class="col">



<h1>Order Details</h1>

<hr>

<table class="table table-striped"> 
    <tr>
        <th>name</th>
        <th>qty</th>
        <th>price</th>
        <th>image</th>
    </tr>

<?php  $total = 0; ?>
    @foreach($order->orderitems as $item)

    <tr>
        <td>{{$item->products->name}}</td>
        <td>{{$item->qty}}</td>
        <td>{{$item->price}}</td>
        <td><img src="{{asset('uploads/products/'.$item->products->image)}}"style="width:50px"></td>
    </tr>



    @endforeach


    <h4>Total Price : {{$order->total_price}}</h4>


</table>












</div> <!-- End col two -->




</div>  <!-- End row -->  


















</div><!-- end card-body -->




</div><!-- end card -->







</div>


