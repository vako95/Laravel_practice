@extends('mypage.includes.main')
@section('lyout')


<form action="{{ route('martin.store') }}" method="post" form="multipart/form-data">
@csrf
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" placeholder="Title" name="title">

  </div>
  <div class="form-group">
    <label for="content">Content</label>
    <textarea name="content" id="content" cols="30" rows="10"></textarea>

  </div>

  <div class="form-group">
    <label for="image">Image</label>
     <input type="text" id="image" class="form-control" placeholder="Image" name="image">

  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection('lyout')
