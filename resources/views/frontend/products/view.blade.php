@extends('layouts.frontend')


@section('title')

E-Shop

@endsection





@section('content')



<!-- Start navbar -->

@include('frontend.nav')

<!-- end Slider -->


<div class="container">



<div class="card shadow">

  


<div class="card-body">




 
<div class="row">












<div class="col">

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 


<img src="{{asset('uploads/products/'.$product->image)}}" alt="" style="width:300px">

</div> <!--  end col -->


<div class="col">

<h2 class="mb-5">

{{$product->name}}




@if( $product->trending ==  1)
    
   <label class="float-end bg-danger text-light p-1 badge rounded">Trending</label>
@endif
</h2>



 

<!-- //////////////////////////////////////////////////////////// -->

<!-- Price -->
 

<label class="me-2">Original Price :  <s>{{$product->original_price}}</s></label>
<label class="fw-bold">Selling Price : </label> <span>{{$product->selling_price}}</span>

<br>

@if($product->qty > 0)
   <label class="bg-success text-light p-1 badge rounded">In stock</label>    
   @else
   <label class="bg-danger text-light p-1 badge rounded">Out stock</label>
@endif


<p class="mt-3">
 
{{ $product->small_description }}

</p>










<form    method= "post" style="display:inline-block"  > 
   @csrf

   <input type="hidden" name="product_id" class="product_id" value="{{$product->id}}">



<div class="input-group text-center mb-3">
       <input type="number" name="qty"  value="1" max="10" min="1" class="quantity">
       <div class="error_quatity text-danger"></div>
</div>

<button   type="submit" formaction="{{url('add-to-cart')}}" class="btn btn-primary">Add To Cart</button>


<button   type="submit" formaction="{{url('add-to-wishlist')}}" class="btn btn-success">Add To Wishlist <i class="fa fa-heart"></i></button>

</form>



</div> <!-- end col -->






</div> <!-- end row -->





</div><!-- End card body -->



</div> <!-- End card --> 



</div><!-- End container -->













@section('scripts')



@if(session('status'))
  <script>
  
  swal("{{ session('status') }}");

  </script>
 @endif



@endsection




@endsection