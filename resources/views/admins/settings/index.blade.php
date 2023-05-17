@extends('admin')


@section('content')






    <div class="container mt-5">
       
    <h3 class="text-center text-primary">Settings</h3>

  

@foreach($settings as $setting)
    <div class="row">


       <div class="col">
    
       <label for="">Address</label>
       <input type="text" class="form-control" value="{{$setting->address}}"  disabled>

       <!-- end col one -->
       </div>
       <div class="col">
    
       <label for="">Phone</label>
       <input type="text" class="form-control" value="{{$setting->phone}}"  disabled>

       <!-- end col two -->
       </div>
    

<!-- end row one -->
    </div>


    <!-- Row Two -->
    <div class="row">


       <div class="col">
    
       <label for="">Email</label>
       <input type="text" class="form-control" value="{{$setting->email}}"  disabled>

       <!-- end col one -->
       </div>
       <div class="col">
    
       <label for="">link Facebook</label>
       <input type="text" class="form-control" value="{{$setting->link_face}}"  disabled>

       <!-- end col two -->
       </div>
    

<!-- end row two -->
    </div>

    <!-- Row Three -->
    <div class="row">


       <div class="col">
    
       <label for="">Link Instegram </label>
       <input type="text" class="form-control" value="{{$setting->link_ins}}"  disabled>

       <!-- end col one -->
       </div>
       <div class="col">
    
       <label for="">link Twitter</label>
       <input type="text" class="form-control" value="{{$setting->link_twi}}"  disabled>

       <!-- end col two -->
       </div>


       <div class="col">
    
       <label for="">link Penterst</label>
       <input type="text" class="form-control" value="{{$setting->link_pen}}"  disabled>

       <!-- end col three -->
       </div>
    

<!-- end row two -->
    </div>


    <a href="{{route('settings.edit',$setting->id)}}" class="btn btn-primary">Edit</a>


@endforeach




          <!-- end container -->
    </div>
   








@endsection