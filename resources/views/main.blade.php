@extends('layouts.main')
@section('content')

@foreach($posts as $key)
{{ $key->title }}
@endforeach

<div>
    <ul>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>

@endsection
