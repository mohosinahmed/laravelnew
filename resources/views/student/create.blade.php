@extends('welcome')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <p>
                <a href="{{ route('add.category')}}" class="btn btn-danger">Add student</a>
                <a href="{{ route('all.students')}}" class="btn btn-info">All student</a>
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

            <form action="{{ route('store.student')}}" name="" method="post" id="" >
               @csrf
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>student name</label>
                        <input type="text" class="form-control" placeholder="student name" name="name" >
                    </div>
                </div>

                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>student email</label>
                        <input type="text" class="form-control" placeholder="email" name="email" >
                    </div>
                </div>
                
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>phone</label>
                        <input type="text" class="form-control" placeholder="phone" name="phone" >
                    </div>
                </div>


                <br>
                <div id="success"></div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" id="sendMessageButton">submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection