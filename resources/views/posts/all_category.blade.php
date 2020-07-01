@extends('welcome')
@section('content')
<div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
            <a href="{{route('add.category')}}" class="btn btn-danger">Add Category</a>
            <a href="{{route('all.category')}}" class="btn btn-info">All Category</a>

                <hr>
        <table class="table table-responsive">
            <tr>
                <th>Sl</th>
                <th>Category Name</th>
                <th>Slug Name</th>
                <th>Action</th>
            </tr>
            @foreach ($category as $row)
            <tr>
                <td>{{$row->id}}</td>
                <td>{{$row->name}}</td>
                <td>{{$row->slug}}</td>
                <td>
                    <a href="{{ URL::to('view/category/'.$row->id)}}" class="btn btn-danger">View</a>
                    <a href="{{URL::to('edit/category/'.$row->id)}}" class="btn btn-warning">Edit</a>
                    <a href="{{ URL::to('delete/category/'.$row->id)}}" class="btn btn-success">Delete</a>
                </td>
            </tr>
            @endforeach
        </table>
      </div>
    </div>
  </div>
@endsection
