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
      <th scope="col">description</th>
      <th scope="col">status</th>
      <th scope="col">popular</th>
      <th scope="col">meta_title</th>
      <th scope="col">meta_keywords</th>
      <th scope="col">meta_discrip</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>

  </tbody>
</table>





</div>







@endsection