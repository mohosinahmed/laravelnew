@extends('welcome')
@section('content')
<div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <p>
        <a href="{{ route('add.category')}}" class="btn btn-danger">Add Category</a>
        <a href="{{ route('all.category')}}" class="btn btn-info">All Category</a>
        </p>
        
        <hr>
        
        <table class="table table-responsive">
            <tr>
                <th>Sl</th>
                <th>CAtegory name</th>
                <th>slug name</th>
                <th>created at</th>
                <th>action</th>
            </tr>
            @foreach( $category as $row )
            <tr>
                <td>{{ $row->id}}</td>
                <td>{{ $row->name}}</td>
                <td>{{ $row->slug}}</td>
                <td>{{ $row->created_at}}</td>
                <td>
                <a href="{{ URL::to('edit/category/'.$row->id)}}" class="">edit</a>
                <a href="{{ URL::to('delete/category/'.$row->id)}}" class="" id="delete">delete</a>
                <a href="{{ URL::to('view/category/'.$row->id)}}" class="">view</a>
                </td>
            </tr>
            @endforeach
        </table>
      </div>
    </div>
  </div>
@endsection