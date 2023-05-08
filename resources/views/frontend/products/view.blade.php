




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







<!-- Start navbar -->

@include('frontend.layouts.nav')

<!-- end Slider -->


<div class="container">



<div class="card ">

  


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
        <input type="number" name="qty" class="qty"  value="1" max="10" min="1" class="quantity">
</div>

<div>

<button   type="submit" formaction="{{url('add-to-cart')}}" class="btn btn-primary addcart">Add To Cart <i class="fa fa-cart-plus"></i></button>

<button   type="submit" formaction="{{url('add-to-wishlist')}}" class="btn btn-success"  >Add To Wishlist <i class="fa fa-heart"></i></button>

</div>


</form>





</div> <!-- end col -->






</div> <!-- end row -->





<hr>




<!-- Button trigger modal -->


<div class="row">
    <div class="col">
    <a type="button"   data-bs-toggle="modal" data-bs-target="#rating">
     Rating Product   
</a>

<a href="{{url('add-review',$product->slug)}}"  > Write a Review</a>
    </div>  <!--end col one -->




<!-- ///////////////////////////////////////////////////////////////// -->






                            <!-- //////////// -->
                            <div class="tab-style3">
                                <ul class="nav nav-tabs text-uppercase">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="Description-tab" data-bs-toggle="tab" href="#Description">Description</a>
                                    </li>
                            

                                    
                                    <li class="nav-item">
                                        <a class="nav-link" id="Reviews-tab" data-bs-toggle="tab" href="#Reviews">Reviews (3)</a>
                                    </li>
                                </ul>
                                <div class="tab-content shop_info_tab entry-main-content">
                                    <div class="tab-pane fade show active" id="Description">

                                        <div class="">
                                            <p>{{$product->description}}</p>
                                       
                                        </div>
                                    </div>
                                   





                                    <div class="tab-pane fade" id="Reviews">
                                        <!--Comments-->
                                        <div class="comments-area">
                                            <div class="row">
                                            
                                                <div class="col-lg-8">
                                                    <h4 class="mb-30">Customer questions & answers</h4>
                                                    <?php  foreach($reviews as $review): ?>
                                                    <div class="comment-list">
                                                 
                                                        <div class="single-comment justify-content-between d-flex">
                                                     





                                                            <div class="user justify-content-between d-flex">
                                                          
                                                                <div class="thumb text-center">
                                                                    <img src="{{ asset('uploads/users/'.$review->users->image )}}" alt="">
                                                                    <h6><a href="#">{{$review->users->name}}</a></h6>
                                                                    <p class="font-xxs">Since {{$review->created_at->year}}</p>
                                                                </div>
                                                                <?php
                                                                   $rating = App\Models\Rating::where('user_id',$review->users->id)->where('product_id',$review->product_id)->first();
                                                            
                                                                    ?>
                                                                <?php if($rating): ?>
                                                                <div class="desc">
                                                                    <div class=" d-inline-block">
                                                                        <div  style="width:100%">
                                                                         @for($i =  1 ; $i <= $rating->stars ; $i++ )
                                                                                <i class="fa fa-star text-warning"></i>
                                                                           @endfor
                                                                          @for($j = $rating->stars+1 ; $j <= 5 ; $j++ )
                                                                          <i class="fa fa-star"></i>   
                                                                          @endfor
                                                                        </div>
                                                                    </div>
                                                                    <?php endif; ?>
                                                                    <p>
                                                                        {{$review->user_review}}. 
                                                                          
                                                                        @if($review->user_id == Auth::id())
 
   
                                                                    <a href="{{url('edit-review',$product->slug)}}" class="text-primary" >edit</a>

                                                                         @endif 
                                                                    </p>
                                                                    <div class="d-flex justify-content-between">
                                                                        <div class="d-flex align-items-center">
                                                                            <p class="font-xs mr-30">{{$review->created_at->format('d-M-Y g:i:s A' ) }} </p>
                                                                        </div>
                                                                   
                                                                    </div>
                                                                 
                                                                </div>
                                                            </div>
                                                     
                                                        </div>
                                              
                                                        <?php  endforeach; ?>
                                                    
                                                    </div>
                                                 
                                                </div>
                                               
                                            

                                                <div class="col-lg-4">

                                                    <h4 class="mb-30">Customer reviews</h4>
                                                    <div class="d-flex mb-30">
                                                        <div class="product-rate d-inline-block mr-15">
                                                            <div class="product-rating" style="width:90%">
                                                            </div>
                                                        </div>
                                                        <h6>4.8 out of 5</h6>
                                                    </div>
                                                    <div class="progress">
                                                        <span>5 star</span>
                                                        <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                                    </div>
                                                    <div class="progress">
                                                        <span>4 star</span>
                                                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                                    </div>
                                                    <div class="progress">
                                                        <span>3 star</span>
                                                        <div class="progress-bar" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">45%</div>
                                                    </div>
                                                    <div class="progress">
                                                        <span>2 star</span>
                                                        <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
                                                    </div>
                                                    <div class="progress mb-30">
                                                        <span>1 star</span>
                                                        <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                                                    </div>
                                                    <a href="#" class="font-xs text-muted">How are ratings calculated?</a>



                                                    
                                                </div>
                                            </div>
                                        </div>
                                       
                                </div>
















<div class="col">

</div> <!--end col two -->




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








@include('frontend.layouts.footer')















