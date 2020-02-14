@extends('welcome')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <p>
                <a href="{{ route('write.post')}}" class="btn btn-danger">write post</a>
            </p>

            <hr>

            <table class="table table-responsive">
                <tr>
                    <th>Sl</th>
                    <th>CAtegory </th>
                    <th>title</th>
                    <th>image</th>
                    <th>action</th>
                </tr>
                @foreach( $posts as $post )
                <tr>
                    <td>{{ $post->id}}</td>
                    <td>{{ $post->name}}</td>
                    <td>{{ $post->title}}</td>
                    <td></td>
                    <td>
                        <a href="{{ URL::to('edit/post/'.$post->id)}}" class="text-warnposting">edit</a>
                        <a href="{{ URL::to('delete/post/'.$post->id)}}" class="text-danger" id="delete">delete</a>
                        <a href="{{ URL::to('view/post/'.$post->id)}}" class="text-info">view</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection