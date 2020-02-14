@extends('welcome')
@section('content')

<div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <p>
        <a href="{{ route('add.category')}}" class="btn btn-danger">Add Category</a>
        <a href="{{ route('all.category')}}" class="btn btn-info">All Category</a>
        </p>
        
        <form name="" id="" novalidate>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Post Title</label>
              <input type="text" class="form-control" placeholder="title" id="title" >
            </div>
          </div>
          
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <p>Category</p>
              <select class="form-control" name="category_id">
                  <option>sds</option>
                  <option>sds</option>
              </select>
            </div>
          </div>
          
          <div class="control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <label>Post Image</label>
              <input type="file" class="form-control" placeholder="Phone Number" id="phone" >
              
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Post Details</label>
              <textarea rows="5" class="form-control" placeholder="Message" id="message" ></textarea>
              
            </div>
          </div>
          <br>
          <div id="success"></div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary" id="sendMessageButton">Send</button>
          </div>
        </form>
      </div>
    </div>
  </div>

@endsection