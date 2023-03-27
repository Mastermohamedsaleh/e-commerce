@extends('layouts.frontend')


@section('title')

E-Shop

@endsection





@section('content')




 
 
<div class="row">





<div class="col">


<img src="{{asset('uploads/products/'.$product->image)}}" alt="" style="width:300px">

</div> <!--  end col -->


<div class="col">


</div> <!-- end col -->






</div> <!-- end row -->







@endsection