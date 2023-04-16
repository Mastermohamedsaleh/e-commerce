 



 <section class="product-tabs section-padding position-relative wow fadeIn animated">
            <div class="bg-square"></div>
            <div class="container">
                <div class="tab-header">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="nav-tab-one" data-bs-toggle="tab" data-bs-target="#tab-one" type="button" role="tab" aria-controls="tab-one" aria-selected="true">Featured</button>
                        </li>
                  
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nav-tab-three" data-bs-toggle="tab" data-bs-target="#tab-three" type="button" role="tab" aria-controls="tab-three" aria-selected="false">New added</button>
                        </li>
                    </ul>
                    <a href="#" class="view-more d-none d-md-flex">View More<i class="fi-rs-angle-double-small-right"></i></a>
                </div>
                <!--End nav-tabs-->
                <div class="tab-content wow fadeIn animated" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                        
                    <div class="row product-grid-4">


                    @foreach($products as $product)
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="default-img" src="{{asset('uploads/products/'.$product->image)}}" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" href="{{url('category/'.$product->category->slug .'/'.$product->slug)}}" class="action-btn hover-up" ><i class="fi-rs-eye"></i></a>

                                            <form action="{{url('/add-to-wishlist')}}" method="post"  style="display:inline-block" >
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{$product->id}}">
                                            <button aria-label="Add To Wishlist" class="action-btn hover-up" href=""><i class="fi-rs-heart"></i></button>

                                            </form>
  
                                        </div>
                                    
                                    </div>

                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop.html">Clothing</a>
                                        </div>
                                        <h2><a href="product-details.html">{{$product->name}}</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>90%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                        <span>${{$product->selling_price}} </span>
                                            <span class="old-price">${{$product->original_price}}</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
@endforeach
                            
                    
              
                        </div>
                        <!--End product-grid-4-->
                    </div>
                    <!--En tab one (Featured)-->
             
  
                   
                    <div class="tab-pane fade" id="tab-three" role="tabpanel" aria-labelledby="tab-three">
                        <div class="row product-grid-4">
                        @foreach($new_products as $product)

                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="default-img" src="{{asset('uploads/products/'.$product->image)}}" alt="" >
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                        <a aria-label="Quick view" href="{{url('category/'.$product->category->slug .'/'.$product->slug)}}" class="action-btn hover-up" ><i class="fi-rs-eye"></i></a>


                                            <form action="{{url('/add-to-wishlist')}}" method="post"  style="display:inline-block" >
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{$product->id}}">
                                            <button aria-label="Add To Wishlist" class="action-btn hover-up" href=""><i class="fi-rs-heart"></i></button>

                                            </form>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">Hot</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop.html">Music</a>
                                        </div>
                                        <h2><a href="product-details.html">{{$product->name}}</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>90%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>${{$product->selling_price}} </span>
                                            <span class="old-price">${{$product->original_price}}</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           

                    
                           
                            @endforeach
                    
                 
               
               
                            </div>
                        </div>
                        <!--End product-grid-4-->
                    </div>
                    <!--En tab three (New added)-->
                </div>
                <!--End tab-content-->
            </div>
        </section>
