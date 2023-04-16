
<nav class="navbar navbar-light  bg-warning">
  <div class="container">
    <span class="navbar-brand mb-0 h1">E-Shop</span>


  
<h6 class="mb-0">
    <a href="{{url('/')}}">Home</a> /
    <a href="{{url('all_my_order')}}">My Order</a>

</h6>


   
      


     
  </div>
</nav>




<!-- Start navbar -->

@include('frontend.layouts.nav')

<!-- end Slider -->












<div class="container mt-5">



 
<table class="table table-striped shadow">
  
 

 
  
<tr>
 
 <th>Tracking Number</th>
 <th>Total Price</th>
 <th>Status</th>
 <th>Action</th>

</tr>
 



@if($orders)


@foreach($orders as $order)

<tr>
    <td>{{$order->tracking_no}}</td>
    <td>{{$order->total_price}}</td>
    <td>{{$order->status == 0 ? 'Pending' : 'Completed'}}</td>
    <td><a href="{{url('vieworder',$order->id)}}" class="btn btn-primary">View</a></td>
</tr>
@endforeach

@else

<tr>
    <th class="text-danger">No Order</th>
</tr>




 
 
</table>

   
  

@endif
  

  



</div>

