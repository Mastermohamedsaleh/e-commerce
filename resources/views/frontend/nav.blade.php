<!-- Start navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link {{Request::is('/') ?  'active' : '' }}" aria-current="page" href="{{url('/')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{Request::is('viewcart') ?  'active' : '' }}" href="{{url('viewcart')}}">My Cart <span class="countcart"></span>   </a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{Request::is('wishlist') ?  'active' : '' }}" href="{{url('wishlist')}}">Wishlist <span class="countwishlist" ></span></a>
        </li> 

        <li class="nav-item">
          <a class="nav-link {{Request::is('all_my_order') ?  'active' : '' }} " href="{{url('all_my_order')}}">My Order</a>
        </li>


        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle {{Request::is('category/') ?  'active' : '' }}" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Categories
          </a>
          <ul class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
           <?php  $categories = App\models\Category::all(); ?>
            @foreach(  $categories  as $category)
            <li><a class="dropdown-item {{Request::is('category/'.$category->slug) ?  'active' : '' }}" href="{{url('category/'.$category->slug)}}">{{$category->name}}</a></li>
            @endforeach
          </ul>
        </li>










      </ul>











            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
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









    </div>
  </div>
</nav>
<!-- end navbar -->


      