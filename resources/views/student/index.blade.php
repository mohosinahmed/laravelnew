@extends('welcome')
@section('content')
<div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <p>
        <a href="{{ route('all.students')}}" class="btn btn-danger">Add Category</a>
        <a href="{{ route('all.category')}}" class="btn btn-info">All Category</a>
        </p>
        
        <hr>
        
        <table class="table table-responsive">
            <tr>
                <th>Sl</th>
                <th>student name</th>
                <th>student phone</th>
                <th>email</th>
                <th>action</th>
            </tr>
            @foreach( $students as $student )
            <tr>
                <td>{{ $student->id}}</td>
                <td>{{ $student->name}}</td>
                <td>{{ $student->phone}}</td>
                <td>{{ $student->email}}</td>
                <td>
                <a href="{{ URL::to('edit/category/'.$errors->id)}}" class="text-warning">edit</a>
                <a href="{{ URL::to('delete/category/'.$errors->id)}}" class="text-danger" id="delete">delete</a>
                <a href="{{ URL::to('view/category/'.$errors->id)}}" class="text-info">view</a>
                </td>
            </tr>
            @endforeach
        </table>
      </div>
    </div>
  </div>
@endsection