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

            <div class="">
                <ul>
                    <li>title: {{ $posts->title}}</li>
                    <li>deta: {{ $posts->details}}</li>
                    <li>cate name: {{ $posts->name}}</li>
                </ul>

            </div>


        </div>
    </div>
</div>
@endsection