@extends('admin')


@section('content')


<div class="container">



<a href="{{route('products.create')}}" class="btn btn-primary">Add product</a>


<h3 class="text-center text-primary">product</h3>

<table class="table table-striped text-center table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">slug</th>
      <th scope="col">original_price</th>
      <th scope="col">selling_price</th>
      <th scope="col">image</th>
      <th scope="col">qty	</th>
      <th scope="col">tax</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>


@if($products)

  @foreach($products as $index=>$product)
    <tr>
      <th scope="row">{{ $index + 1 }}</th>
      <td>{{ $product->name }}</td>
      <td>{{ $product->slug }}</td>
      <td>{{ $product->original_price }}</td>
      <td>{{ $product->selling_price }}</td>
      <td> <img src="{{asset('uploads/products/'.$product->image)}}" alt="" style="width:40px"> </td>
      <td>{{ $product->qty }}</td>
      <td>{{ $product->tax }}</td>
    
      <td>

      <a href="{{route('products.edit',$product->id)}}" class="btn btn-success btn-sm" title="Edit" ><i class="fa fa-edit"></i></a>



                               <button type="button" class="btn btn-danger btn-sm"
                               data-bs-toggle="modal"
                               data-bs-target="#delete{{$product->id}}" title="Delete"><i
                                                            class="fa fa-trash"></i></button>

                                            
                                                            









                                                            <!-- Delete product -->

<!-- Modal -->
<div class="modal fade"  id="delete{{$product->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">

  <form action="{{route('products.destroy',$product->id)}}" method="post">
            {{method_field('delete')}}
             @csrf
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-danger" id="exampleModalLabel">Delete product</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


      <p> Do you sure from delete  {{$product->name}}</p>
            

      <input type="hidden" name="old_image" value="{{$product->image}}">









      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger">Delete</button>
      </div>
</form>
    </div>
  </div>
</div>







      </td>
 
    </tr>

    @endforeach

@else

<tr>
  <td class="text-danger">No Records</td>
</tr>




@endif 

 


  </tbody>
</table>



<div class="text-center" style="font-size:3px; margin-top:50px">
{{ $products->links() }} 

</div>



</div>







@endsection