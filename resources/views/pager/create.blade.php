@extends('layouts.main')
@section('content')


<div>
<form action="{{ route('index.store') }}" method="post">
    @csrf
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" class="form-control" id="title" placeholder="Title">
 </div>
  <div class="form-group">
    <label for="content">Content</label>
    <textarea  class="form-control" name="content" id="content" placeholder="Content"></textarea>
 </div>
  <div class="form-group">
    <label for="image">Image</label>
    <input type="text" name="image" class="form-control" id="image" placeholder="Title">
 </div>
  <div class="form-group">


  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@endsection

