<!-- Start  Navbar -->

<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>
        @yield('title')
    </title>
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta property="og:title" content="">
<meta property="og:type" content="">
<meta property="og:url" content="">
<meta name="csrf-token" content="{{ csrf_token() }}">

<meta property="og:image" content="">
<link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend/assets/imgs/theme/favicon.ico')}}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/main.css')}}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/custom.css')}}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/vendors/bootstrap.min')}}">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>


<!-- Auto Complate Jquery To Search -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>



<header class="header-area header-style-1 header-height-2">
        <div class="header-top header-top-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-4">
                        <div class="header-info">
                   

          <!-- WhatsApp -->
         
<a href="https://wa.me/01117861776?text=I'm%20interested%20in%20your%20car%20for%20sale"  target="_blank">
<img src="{{asset('frontend/assets/imgs/WhatsApp/WhatsApp.png')}}" alt="" style="width:40px ; height:40px;">
             </a>

          <!--End WhatsApp -->



                                </li>                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-4">
                        <div class="text-center">
                            <div id="news-flash" class="d-inline-block">
                                <ul>
                                    <li>Get great devices up to 50% off <a href="shop.html">View details</a></li>
                                    <li>Supper Value Deals - Save more with coupons</li>
                                    <li>Trendy 25silver jewelry, save up 35% off today <a href="shop.html">Shop now</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <div class="header-info header-info-right">
                            <ul>                                
                                <li><i class="fi-rs-key"></i><a href="login.html"> 
                                   <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>

                                </a>
                                <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          {{ Auth::user()->name }}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
            </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                 </li>
                 </ul>
                </li>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" >
                                    </a>
                                </div>
                            </li>
                        @endguest
                    </ul>

                                </a>  
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="header-wrap">
                    <div class="logo logo-width-1">
                        <a href="index.html"><img src="{{ asset('frontend/assets/imgs/logo/logo.png ')}}" alt="logo"></a>
                    </div>
                    <div class="header-right">
                        <div class="search-style-1">
                            <form action="{{url('searchproduct')}}" method="post" autocomplete="off">    
                                @csrf                            
                                <input type="text" name="search" id="search" class="search" placeholder="Search for items..." >
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div class="header-action-right">
                            <div class="header-action-2">
                                <div class="header-action-icon-2">
                                    <a href="{{url('wishlist')}}">
                                        <img class="svgInject" alt="Surfside Media" src="{{ asset('frontend/assets/imgs/theme/icons/icon-heart.svg')}}">
                                        <div class="countwishlist"></div>
                                    

                                    </a>
                                </div>
                                <div class="header-action-icon-2">
                                    <a class="mini-cart-icon" href="{{url('viewcart')}}">
                                        <img alt="Surfside Media" src="{{ asset('frontend/assets/imgs/theme/icons/icon-cart.svg')}}">

                                   <div class="countcart"></div>

                                    </a>
                                    <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                         <ul>
                                            <?php  $total = 0;  ?>

                                            <?php    $items = App\Models\Cart::where('user_id',Auth::id())->get();     ?>
            
                                            @if($items)

                               @foreach($items as $item)
                                            <li>
                                                <div class="shopping-cart-img">
                                                    <a href="product-details.html"><img alt="Surfside Media" src="{{ asset('uploads/products/'.$item->product->image)}}"></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="product-details.html">{{$item->product->name}}</a></h4>
                                                    <h4><span>{{$item->quantity}} × </span>${{$item->product->selling_price}}</h4>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="fi-rs-cross-small"></i></a>
                                                </div>
                                            </li>
                                            
                                            <?php  $total  += $item->product->selling_price * $item->quantity ; ?>
                                @endforeach

                                @endif
                                        </ul>
                                        <div class="shopping-cart-footer">
                                            <div class="shopping-cart-total">
                                                <h4>Total <span>${{$total}}</span></h4>
                                            </div>
                                            <div class="shopping-cart-button">
                                                <a href="{{url('viewcart')}}" class="outline">View cart</a>
                                              
                                            </div>
                                        </div>
                               
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom header-bottom-bg-color sticky-bar">
            <div class="container">
                <div class="header-wrap header-space-between position-relative">
                    <div class="logo logo-width-1 d-block d-lg-none">
                        <a href="index.html"><img src="{{ asset('frontend/assets/imgs/logo/logo.png')}}" alt="logo"></a>
                    </div>
                    <div class="header-nav d-none d-lg-flex">
                        <div class="main-categori-wrap d-none d-lg-block">
                            <a class="categori-button-active" href="#">
                                <span class="fi-rs-apps"></span> Browse Categories
                            </a>
                            <div class="categori-dropdown-wrap categori-dropdown-active-large">
                                <ul>
                                

                                 
                                           <?php   $categories = App\models\Category::all(); ?>
         
                                           
                                    @foreach(  $categories  as $category)            
                                    <li><a href="{{url('category/'.$category->slug)}}"><i class="surfsidemedia-font-desktop"></i>{{$category->name}}</a></li>
                                
                                    
                                    <li>
                                        <ul class="more_slide_open" style="display: none;">
                                            
                                        </ul>
                                    </li>
                                    @endforeach 
                                </ul>
                                <div class="more_categories">Show more...</div>
                            </div>
                        </div>


                   <!-- this code  -->
                        <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block" style="margin-left:200px;display:inline-block">
                            <nav >
                                <ul>
                                    <li><a class="{{Request::is('/') ?  'active' : '' }}" href="{{url('/')}}">Home </a></li>
                                    <li><a href="about.html">About</a></li>
                               
                                    <li><a href="blog.html">Blog </a></li>                                    
                                    <li><a   class="{{Request::is('my_account') ?  'active' : '' }}"  href="{{url('my_account')}}">Account</a></li>
                              

                                    <li><a  class="{{Request::is('all_my_order') ?  'active' : '' }}"  href="{{url('all_my_order')}}">My Order</a></li>

                             
                            
                                </ul>
                            </nav>
                        </div>
                    </div>






                    <div class="hotline d-none d-lg-block">
                    <?php    $settings = App\Models\Setting::all();   ?>
                    @foreach($settings as $setting)

                        <p><i class="fi-rs-smartphone"></i><span>Toll Free</span> (+1) {{$setting->phone}}   
                    @endforeach
                    </p>
                    </div>
                    <p class="mobile-promotion">Happy <span class="text-brand">Mother's Day</span>. Big Sale Up to 40%</p>
                    <div class="header-action-right d-block d-lg-none">
                        <div class="header-action-2">
                            <div class="header-action-icon-2">
                                <a href="shop-wishlist.php">
                                    <img alt="Surfside Media" src="{{ asset('frontend/assets/imgs/theme/icons/icon-heart.svg')}}">
                                   
                                  
                                </a>
                            </div>
                            <div class="header-action-icon-2">
                                <a class="mini-cart-icon" href="">
                                    <img alt="Surfside Media" src="{{ asset('frontend/assets/imgs/theme/icons/icon-cart.svg')}}">
                              
                                </a>
                                <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                    <ul>
                                        <li>
                                            <div class="shopping-cart-img">
                                                <a href="product-details.html"><img alt="Surfside Media" src="{{ asset('frontend/assets/imgs/shop/thumbnail-3.jpg')}}"></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href="product-details.html">Plain Striola Shirts</a></h4>
                                                <h3><span>1 × </span>$800.00</h3>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="#"><i class="fi-rs-cross-small"></i></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="shopping-cart-img">
                                                <a href="product-details.html"><img alt="Surfside Media" src="{{ asset('frontend/assets/imgs/shop/thumbnail-4.jpg')}}"></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href="product-details.html">Macbook Pro 2022</a></h4>
                                                <h3><span>1 × </span>$3500.00</h3>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="#"><i class="fi-rs-cross-small"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="shopping-cart-footer">
                                        <div class="shopping-cart-total">
                                            <h4>Total <span>$383.00</span></h4>
                                        </div>
                                        <div class="shopping-cart-button">
                                            <a href="cart.html">View cart</a>
                                            <a href="shop-checkout.php">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="header-action-icon-2 d-block d-lg-none">
                                <div class="burger-icon burger-icon-white">
                                    <span class="burger-icon-top"></span>
                                    <span class="burger-icon-mid"></span>
                                    <span class="burger-icon-bottom"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>





    <!-- <li><a  class="{{Request::is('all_my_order') ?  'active' : '' }}"  href="{{url('all_my_order')}}">My Order</a></li>
                                    <li class="position-static"><a href="#">Our Collections <i class="fi-rs-angle-down"></i></a>
                                        <ul class="mega-menu">
                                            <li class="sub-mega-menu sub-mega-menu-width-22">
                                                <a class="menu-title" href="#">
                                                <?php  
                                                // $categories = App\models\Category::all(); 
                                                ?>
            @foreach(  $categories  as $category)
        <a class="dropdown-item {{Request::is('category/'.$category->slug) ?  'active' : '' }}" href="{{url('category/'.$category->slug)}}">{{$category->name}}</a>
            @endforeach
                                                </a>
                                                <ul>
                                                    <li><a href="product-details.html">Dresses</a></li>
                                                    <li><a href="product-details.html">Blouses & Shirts</a></li>
                                                    <li><a href="product-details.html">Hoodies & Sweatshirts</a></li>
                                                    <li><a href="product-details.html">Wedding Dresses</a></li>
                                                    <li><a href="product-details.html">Prom Dresses</a></li>
                                                    <li><a href="product-details.html">Cosplay Costumes</a></li>
                                                </ul>
                                            </li>
                                           
                                            <li class="sub-mega-menu sub-mega-menu-width-34">
                                                <div class="menu-banner-wrap">
                                                    <a href="product-details.html"><img src="{{ asset('frontend/assets/imgs/banner/menu-banner.jpg')}}" alt="Surfside Media"></a>
                                                    <div class="menu-banner-content">
                                                        <h4>Hot deals</h4>
                                                        <h3>Don't miss<br> Trending</h3>
                                                        <div class="menu-banner-price">
                                                            <span class="new-price text-success">Save to 50%</span>
                                                        </div>
                                                        <div class="menu-banner-btn">
                                                            <a href="product-details.html">Shop now</a>
                                                        </div>
                                                    </div>
                                                    <div class="menu-banner-discount">
                                                        <h3>
                                                            <span>35%</span>
                                                            off
                                                        </h3>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li> -->