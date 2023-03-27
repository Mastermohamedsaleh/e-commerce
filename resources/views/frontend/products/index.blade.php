@extends('layouts.frontend')


@section('title')

E-Shop

@endsection





@section('content')




 
<div class="p-5">
<div class="container">




<h1 class="text-center text-primary">{{$category->name}}</h1>





<div class="row">
@foreach($products as $product)

<div class="col-md-3">


<div class="card" style="width: 100%;">
<img src="{{asset('uploads/products/'.$product->image)}}" alt="" style = "width:100% ; height:300px">
  <div class="card-body">
  
   
     <a href="{{url('category/'.$category->slug .'/'.$product->slug)}}">{{$product->name}} </a>      

   <div class="row">

<div class="col">
    {{$product->selling_price}}
</div>    <!-- end col -->

<div class="col">
 <s> {{$product->original_price}}</s>
</div>    <!-- end col -->


   </div>    <!-- end Row -->






  </div>
</div>

    <!-- end col -->
</div>
@endforeach

<!-- end row -->
</div>  



 

 
 
  




@endsection