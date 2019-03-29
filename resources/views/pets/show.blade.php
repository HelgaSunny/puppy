@extends('layout')

@section('content links')
    Pets SHOW <br>
    @if(!Auth::guest())
        @if(Auth::user()->id == $pet->user_id)
            <a href="/pets/{{$pet->id}}/edit">Edit {{ $pet-> pet_nickname}}'s info</a>
            <br>
        @endif
    @endif
@endsection

@section('container content')
    {{$pet}};
@endsection
