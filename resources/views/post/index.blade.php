@extends('layouts.main')
@section('content')

<div>
    <div>
        <a href="{{ route('index.create') }}">Create</a>
    </div>
@foreach($posts as $post)
<div><a href="{{ route('index.show', $post->id) }}">{{ $post->id }}. {{ $post->title }}</a></div>

@endforeach
</div>
@endsection
