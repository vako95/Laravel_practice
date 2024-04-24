@extends('layouts.main')
@section('content')

<div>

<div>{{ $post->id }}. {{ $post->title }}</div>
<div>{{ $post->content }}</div>



<div><a href="{{ route('post.edit', $post->id) }}">Update</a></div>

<form action="{{ route('index.delete', $post->id) }}" method="post">
@csrf
@method('delete')
<input type="submit" value="delete">
</form>
<div><a href="">Delete</a></div>
<div><a href="{{ route('index') }}">Back</a></div>
</div>
@endsection

