@extends('layout')

@section('content links')
    Pets SHOW <br>
    @if(!Auth::guest())
        <a href="/pets/{{$pet->id}}/edit">Edit {{ $pet-> pet_nickname}}'s info</a>
        <br>
    @endif
@endsection

@section('container content')
    {{$pet}};
@endsection
