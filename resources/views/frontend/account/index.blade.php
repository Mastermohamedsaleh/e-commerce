

<!-- Start navbar -->

@include('frontend.layouts.nav')

<!-- end Slider -->





<div class="container mt-5">
    


<div class="card">

<div class="card-header bg-danger">


<h2 class="text-center text-light">Change Your Image</h2>

</div>
<!-- card header -->

<div class="card-body">

<div class="row">



<!-- Error -->



@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<!-- end Error -->


<div class="col">
 
 <img src="{{asset('uploads/users/'.$user->image)}}" alt="" style="width:200px">
  
</div>
<!-- end col one -->


<div class="col">

<label for="" class="text-danger">Change your Image</label>


<form action="{{url('update_account')}}" method="post" enctype="multipart/form-data">

@csrf

<input type="hidden" name="user_id" value="{{$user->id}}">
<input type="file"   name="new_image" class="form-control">
<input type="hidden" name="old_image" value="{{$user->image}}">

<button  type="submit" class="btn btn-danger">Change</button>


</form>



</div>
<!-- end col two -->



</div>
<!-- end row -->








</div>
<!-- card body -->



</div>
<!-- end card -->





</div>
<!-- end continer -->









<!-- Start footer -->

@include('frontend.layouts.footer')

<!-- end footer -->


