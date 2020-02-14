@extends('welcome')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <p>
                <a href="{{ route('add.category')}}" class="btn btn-danger">Add Category</a>
                <a href="{{ route('all.category')}}" class="btn btn-info">All Category</a>
                <a href="{{ route('all.post')}}" class="btn btn-info">All post</a>
            </p>
            <hr>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{route('store.post')}}" method="post" name="" id="" >
                @csrf
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Post Title</label>
                        <input type="text" name="title" class="form-control" placeholder="title" id="title" >
                    </div>
                </div>

                <div class="control-group">
                    <div class="form-group">
                        <p>Category</p>
                        <select class="form-control" name="category_id">
                            @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Post Image</label>
                        <input type="file" name="image" class="form-control" placeholder="Phone Number" id="phone" >

                    </div>
                </div>

                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Post Details</label>
                        <textarea rows="5" name="details" class="form-control" placeholder="Message" id="message" ></textarea>

                    </div>
                </div>
                <br>
                <div id="success"></div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" id="">create</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection