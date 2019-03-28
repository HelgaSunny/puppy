@extends('layout')

@section('content links')
    Pets SHOW <br>
    <a href="/pets/{{$pet->id}}/edit">Edit {{ $pet-> pet_nickname}}'s info</a>
    <br>
@endsection

@section('container content')
    {{$pet}};
@endsection
