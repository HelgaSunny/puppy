@extends('layout')

@section('content links')
    Pets <br>
    @foreach($pets as $pet)
        <a href="/pets/{{$pet->id}}">{{ $pet -> pet_nickname}}</a> <br>
    @endforeach
@endsection

