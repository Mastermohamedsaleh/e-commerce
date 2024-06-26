<footer class="main">
        <section class="newsletter p-30 text-white wow fadeIn animated">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 mb-md-3 mb-lg-0">
                        <div class="row align-items-center">
                            <div class="col flex-horizontal-center">
                                <img class="icon-email" src="assets/imgs/theme/icons/icon-email.svg" alt="">
                                <h4 class="font-size-20 mb-0 ml-3">Sign up to Newsletter</h4>
                            </div>
                            <div class="col my-4 my-md-0 des">
                                <h5 class="font-size-15 ml-4 mb-0">...and receive <strong>$25 coupon for first shopping.</strong></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <!-- Subscribe Form -->
                        <form class="form-subcriber d-flex wow fadeIn animated">
                            <input type="email" class="form-control bg-white font-small" placeholder="Enter your email">
                            <button class="btn bg-dark text-white" type="submit">Subscribe</button>
                        </form>
                        <!-- End Subscribe Form -->
                    </div>
                </div>
            </div>
        </section>
        <section class="section-padding footer-mid">
            <div class="container pt-15 pb-20">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="widget-about font-md mb-md-5 mb-lg-0">
                            <div class="logo logo-width-1 wow fadeIn animated">
                                <a href="index.html"><img src="{{asset('frontend/assets/imgs/logo/logo.png')}}" alt="logo"></a>
                            </div>

                            <?php  $settings = App\Models\Setting::all();  ?>

                            @foreach($settings as $setting)
                            <h5 class="mt-20 mb-10 fw-600 text-grey-4 wow fadeIn animated">Contact</h5>
                            <p class="wow fadeIn animated">
                                <strong>Address: </strong> {{$setting->address}}
                            </p>
                            <p class="wow fadeIn animated">
                                <strong>Phone: </strong>+1 {{$setting->phone}}
                            </p>
                            <p class="wow fadeIn animated">
                                <strong>Email: </strong>{{$setting->email}}
                            </p>
                            <h5 class="mb-10 mt-30 fw-600 text-grey-4 wow fadeIn animated">Follow Us</h5>
                            <div class="mobile-social-icon wow fadeIn animated mb-sm-5 mb-md-0">
                                <a href="{{$setting->link_face}}" target = "_blank"><img src="{{asset('frontend/assets/imgs/theme/icons/icon-facebook.svg')}}" alt=""></a>
                                <a href="{{$setting->link_twi}}" target = "_blank"><img src="{{asset('frontend/assets/imgs/theme/icons/icon-twitter.svg')}}" alt=""></a>
                                <a href="{{$setting->link_ins}}" target = "_blank"><img src="{{asset('frontend/assets/imgs/theme/icons/icon-instagram.svg')}}" alt="" ></a>
                                <a href="{{$setting->link_pen}}" target = "_blank"><img src="{{asset('frontend/assets/imgs/theme/icons/icon-pinterest.svg')}}" alt="" ></a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                   
                    <div class="col-lg-2 col-md-3">
                        <h5 class="widget-title wow fadeIn animated">About</h5>
                        <ul class="footer-list wow fadeIn animated mb-sm-5 mb-md-0">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Delivery Information</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms &amp; Conditions</a></li>
                            <li><a href="#">Contact Us</a></li>                            
                        </ul>
                    </div>
                    <div class="col-lg-2  col-md-3">
                        <h5 class="widget-title wow fadeIn animated">My Account</h5>
                        <ul class="footer-list wow fadeIn animated">
                            <li><a href="{{url('my_account')}}">My Account</a></li>
                            <li><a href="{{url('viewcart')}}">View Cart</a></li>
                            <li><a href="{{url('wishlist')}}">My Wishlist</a></li>
                            <li><a href="{{url('all_my_order')}}">Track My Order</a></li>                            
                 
                        </ul>
                    </div>
                    <div class="col-lg-4 mob-center">
                        <h5 class="widget-title wow fadeIn animated">Install App</h5>
                        <div class="row">
                            <div class="col-md-8 col-lg-12">
                                <p class="wow fadeIn animated">From App Store or Google Play</p>
                                <div class="download-app wow fadeIn animated mob-app">
                                    <a href="#" class="hover-up mb-sm-4 mb-lg-0"><img class="active" src="{{asset('frontend/assets/imgs/theme/app-store.jpg')}}" alt=""></a>
                                    <a href="#" class="hover-up"><img src="{{asset('frontend/assets/imgs/theme/google-play.jpg')}}" alt=""></a>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-12 mt-md-3 mt-lg-0">
                                <p class="mb-20 wow fadeIn animated">Secured Payment Gateways</p>
                                <img class="wow fadeIn animated" src="{{asset('frontend/assets/imgs/theme/payment-method.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container pb-20 wow fadeIn animated mob-center">
            <div class="row">
                <div class="col-12 mb-20">
                    <div class="footer-bottom"></div>
                </div>
                <div class="col-lg-6">
                    <p class="float-md-left font-sm text-muted mb-0">
                        <a href="privacy-policy.html">Privacy Policy</a> | <a href="terms-conditions.html">Terms & Conditions</a>
                    </p>
                </div>
                <div class="col-lg-6">
                    <p class="text-lg-end text-start font-sm text-muted mb-0">
                        &copy; <strong class="text-brand">SurfsideMedia</strong> All rights reserved
                    </p>
                </div>
            </div>
        </div>
    </footer>   


        <!-- Vendor JS-->
<script src="{{ asset('frontend/assets/js/vendor/modernizr-3.6.0.min.js ')}}"></script>
<script src="{{ asset('frontend/assets/js/vendor/jquery-3.6.0.min.js ')}}"></script>
<script src="{{ asset('frontend/assets/js/vendor/jquery-migrate-3.3.0.min.js ')}}"></script>
<script src="{{ asset('frontend/assets/js/vendor/bootstrap.bundle.min.js ')}}"></script>
<script src="{{ asset('frontend/assets/js/plugins/slick.js')}}"></script>
<script src="{{ asset('frontend/assets/js/plugins/jquery.syotimer.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/plugins/wow.js')}}"></script>
<script src="{{ asset('frontend/assets/js/plugins/jquery-ui.js')}}"></script>
<script src="{{ asset('frontend/assets/js/plugins/perfect-scrollbar.js')}}"></script>
<script src="{{ asset('frontend/assets/js/plugins/magnific-popup.js')}}"></script>
<script src="{{ asset('frontend/assets/js/plugins/select2.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/plugins/waypoints.js')}}"></script>
<script src="{{ asset('frontend/assets/js/plugins/counterup.js')}}"></script>
<script src="{{ asset('frontend/assets/js/plugins/jquery.countdown.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/plugins/images-loaded.js')}}"></script>
<script src="{{ asset('frontend/assets/js/plugins/isotope.js')}}"></script>
<script src="{{ asset('frontend/assets/js/plugins/scrollup.js')}}"></script>
<script src="{{ asset('frontend/assets/js/plugins/jquery.vticker-min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/plugins/jquery.theia.sticky.js')}}"></script>
<script src="{{ asset('frontend/assets/js/plugins/jquery.elevatezoom.js')}}"></script>
<!-- Template  JS -->
<script src="{{ asset('frontend/assets/js/main.js?v=3.3')}}"></script>
<script src="{{ asset('frontend/assets/js/shop.js?v=3.3')}}"></script>
<script src="{{ asset('frontend/js/system.js')}}"></script>



<!-- Auto Complate Jquery To Search -->
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

<!-- Sweetalerte  -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>




@if(session('status'))
<script>

swal("{{ session('status') }}");

</script>
@endif


<script>

    var availableTags = [];


    $.ajax({
        method: 'GET',
        url: '/product-list',
        success:function(response){
            // startAutoComplete(response);
            startAutoComplete(response);
        }
 

    });

 

    function startAutoComplete(availableTags){
        $("#search").autocomplete({
              source: availableTags
        });
    }

 
  </script>






@yield('scripts')


</body>