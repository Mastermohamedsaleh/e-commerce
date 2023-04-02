@extends('admin')


@section('content')





<div class="container">


<table class="table table-striped text-center table-hover shadow">



<h1 class="text-center text-primary">All Order</h1>

  <tr>
    <th>Order Date</th>
    <th>Tracking Number</th>
    <th>Total Price</th>
    <th>Status</th>
    <th>Action</th>
  </tr>




  @foreach($orders as $order)
 
   <tr>
 
   <td>{{$order->created_at}}</td>
   <td>{{$order->tracking_no}}</td>
   <td>{{$order->total_price}}</td>
   <td>{{$order->status == 0 ? 'Pending' : 'Completed'}}</td>

   <td><a href="{{url('view_to_order',$order->id)}}" class="btn btn-primary">view</a></td>

   </tr>
 

  @endforeach

</table>


{{$orders->links()}}


</div>





@endsection