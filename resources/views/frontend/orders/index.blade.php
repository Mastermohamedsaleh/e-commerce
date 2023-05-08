















@include('frontend.layouts.nav')







<div class="container mt-5">


<div>
 
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














