@extends('welcome')
@section('content')

<div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
        @foreach($posts as $post)
        <div class="post-preview">
            <a href="post.html">
                <h2 class="post-title">{{ $post->title}}</h2>
            </a>
            <p class="post-meta">cAtegory: 
                <a href="#">{{ $post->name}}</a>
            </p>
            <p class="post-meta">slug: 
                <a href="#">{{ $post->slug}}</a>
            </p>
        </div>
        <hr>
        @endforeach
        {{ $posts->links() }}
    </div>
</div>

@endsection