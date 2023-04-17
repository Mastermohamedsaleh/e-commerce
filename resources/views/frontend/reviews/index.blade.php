


<!-- Start navbar -->

@include('frontend.layouts.nav')

<!-- end Slider -->







<div class="container">
    


   <div class="card">
<div class="card-header bg-danger  rounded text-center">
  
 <h5 class="text-light">You are write a review for {{$product_slug}}</h5>  
  
</div>


<div class="card-body">







@if($verified_purchase->count() > 0 )

<form action="{{url('create-review')}}" method="post">
    @csrf
<input type="hidden" name="product_id" value="{{$product_check->id}}">
<textarea name="user_review" class="w-100"></textarea>

<button type="submit" class="btn btn-primary">Add</button>


</form>
@else

<div class="alert alert-danger">
    <h5>You are eligble to review this product</h5>
    <p>
        Only customers who purchased the product can write a review about the product
    </p>

    <a href="{{url('/')}}" class="btn btn-primary">Go to home Page</a>
</div>

@endif






</div>


   </div>

 




</div>  <!-- end container-->













@include('frontend.layouts.footer')