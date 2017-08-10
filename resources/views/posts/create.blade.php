@extends('layout.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <h1>Create a post</h1>
   
   <hr>

    <form method="POST" action="/posts">
        {{ csrf_field() }}
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Title" name="title">
  </div>

  <div class="form-group">
    <label for="body">Body</label>
    <textarea class="form-control" id="body" rows="3" name="body"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Publish</button>
</form>

 </div>
@endsection