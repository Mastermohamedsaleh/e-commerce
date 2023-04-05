@extends('layouts.frontend')


@section('title')

E-Shop

@endsection




<style>
  .rate {
    float: left;
    height: 46px;
    padding: 0 10px;
}
.rate:not(:checked) > input {
    position:absolute;
    top:-9999px;
}
.rate:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:30px;
    color:#ccc;
}
.rate:not(:checked) > label:before {
    content: '★ ';
}
.rate > input:checked ~ label {
    color: #ffc700;    
}
.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
    color: #deb217;  
}
.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label {
    color: #c59b08;
}


</style>



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





<hr>




<!-- Button trigger modal -->


<div class="row">
    <div class="col">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#rating">
     Rating Product
</button>
    </div>
</div>






<!-- Modal -->
<div class="modal fade" id="rating" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Rating Product</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">



<form action="{{url('rating')}}"  method="POST">



@csrf


<input type="hidden" name="product_id" value="{{$product->id}}">

<div class="rate">
    <input type="radio"  name="rating" id="star5" name="rate" value="5" />
    <label for="star5" title="text">5 stars</label>
    <input type="radio" name="rating" id="star4" name="rate" value="4" />
    <label for="star4" title="text">4 stars</label>
    <input type="radio" name="rating" id="star3" name="rate" value="3" />
    <label for="star3" title="text">3 stars</label>
    <input type="radio" name="rating" id="star2" name="rate" value="2" />
    <label for="star2" title="text">2 stars</label>
    <input type="radio"  name="rating" id="star1" name="rate" value="1" />
    <label for="star1" title="text">1 star</label>
  </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>


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