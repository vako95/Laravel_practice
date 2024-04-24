@extends('mypage.includes.main')
@section('lyout')

<div>
    @foreach($data as $key)

<div>{{ $key->id }} {{ $key->content }}</div>
    @endforeach
</div>

@endsection('lyout')
