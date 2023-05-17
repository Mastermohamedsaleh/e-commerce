@extends('admin')


@section('content')






    <div class="container mt-5">
       


    
    <h3 class="text-center text-primary">Update Settings</h3>

    

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  
<form action="{{route('settings.update',$setting->id)}}"  method="post">
@csrf
@method('PUT')

    <div class="row">


       <div class="col">
    

       <label for="">Address</label>
       <input type="text" class="form-control" name="address" value="{{$setting->address}}"  >

       <!-- end col one -->
       </div>
       <div class="col">
    
       <label for="">Phone</label>
       <input type="text" class="form-control" name="phone" value="{{$setting->phone}}"  >

       <!-- end col two -->
       </div>
    

<!-- end row one -->
    </div>


    <!-- Row Two -->
    <div class="row">


       <div class="col">
    
       <label for="">Email</label>
       <input type="text" class="form-control" name="email" value="{{$setting->email}}"  >

       <!-- end col one -->
       </div>
       <div class="col">
    
       <label for="">link Facebook</label>
       <input type="text" class="form-control" name="link_face" value="{{$setting->link_face}}"  >

       <!-- end col two -->
       </div>
    

<!-- end row two -->
    </div>

    <!-- Row Three -->
    <div class="row">


       <div class="col">
    
       <label for="">Link Instegram </label>
       <input type="text" class="form-control" name="link_ins" value="{{$setting->link_ins}}"  >

       <!-- end col one -->
       </div>
       <div class="col">
    
       <label for="">link Twitter</label>
       <input type="text" class="form-control" name="link_twi" value="{{$setting->link_twi}}"  >

       <!-- end col two -->
       </div>


       <div class="col">
    
       <label for="">link Penterst</label>
       <input type="text" class="form-control" name="link_pen" value="{{$setting->link_pen}}"  >

       <!-- end col three -->
       </div>
    

<!-- end row two -->
    </div>


  
       <button  type="submit" class="btn btn-primary">Update</button>

    </form>





          <!-- end container -->
    </div>
   








@endsection