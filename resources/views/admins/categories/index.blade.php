@extends('admin')


@section('content')


<div class="container">



<a href="{{route('categories.create')}}" class="btn btn-primary">Add Category</a>


<h3 class="text-center text-primary">Category</h3>

<table class="table table-striped text-center table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">slug</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>


@if($categories)

  @foreach($categories as $index=>$category)
    <tr>
      <th scope="row">{{ $index + 1 }}</th>
      <td>{{ $category->name }}</td>
      <td>{{ $category->slug }}</td>

 
      <td>

      <a href="{{route('categories.edit',$category->id)}}" class="btn btn-success btn-sm" title="Edit" ><i class="fa fa-edit"></i></a>



                               <button type="button" class="btn btn-danger btn-sm"
                               data-bs-toggle="modal"
                               data-bs-target="#delete{{$category->id}}" title="Delete"><i
                                                            class="fa fa-trash"></i></button>

                                            
                                                            









                                                            <!-- Delete Category -->

<!-- Modal -->
<div class="modal fade"  id="delete{{$category->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">

  <form action="{{route('categories.destroy',$category->id)}}" method="post">
            {{method_field('delete')}}
             @csrf
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-danger" id="exampleModalLabel">Delete Category</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


      <p> Do you sure from delete  {{$category->name}}</p>
            










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
{{ $categories->links() }} 

</div>



</div>







@endsection