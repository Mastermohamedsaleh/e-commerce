











<!-- Start navbar -->

@include('frontend.layouts.nav')

<!-- end Slider -->














<div class="container mt-5">







<table class="table table-striped text-center shadow ">
  





    <tr>
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Action</th>
    </tr>
  
 
    <?php  $total = 0 ?>

    <!-- <form action="{{url('checkout')}}" method="post"> -->


    <!-- @csrf -->

    @foreach($items as $item)
    <tr>
      <th scope="row"><img src="{{asset('uploads/products/'.$item->product->image)}}" style="width:50px"></th>
      <td>{{$item->product->name}}</td>
      <td>{{$item->product->selling_price}}</td>
       <td> <input type="number" name="qty" id="product-quantity'"  max="10" min="1"  value="{{$item->quantity}}"> </td>
        
      <td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$item->id}}" >Delete</button></td>
    </tr>


      
       <!-- <input type="hidden"   name="product_id" value = "{{$item->product_id}}" > -->










 
     



    <div class="text-center">


<a  href="{{url('checkout')}}" class="btn btn-outline-success">Proceed to Checkout</a>


</div>

<!-- </form> -->





<!-- Delete Modal -->
<div class="modal fade" id="delete{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete {{$item->product->name}}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         
  

      <form action="{{url('delete-in-cart',$item->id)}}" method="post">
       @csrf
      <p>Are You Sure From Delete {{$item->product->name}}</p>
 
      <input type="hidden"  name="product_id" value="{{$item->product_id}}">
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger">Delete</button>
      </div>
      </form>
    </div>
  </div>
</div>


<?php   
  //  $total  += $item->product->selling_price * $item->quantity;  
    ?>





   @endforeach
</table>









 

 
 
  
</div>









@section('scripts')

@if(session('status'))
  <script>
  
  swal("{{ session('status') }}");

  </script>
 @endif

@endsection



@include('frontend.layouts.footer')
