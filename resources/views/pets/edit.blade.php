@extends('layout')

@section('head title','Edit your pet\'s info')

@section('container content')
    <form method="POST" action="/pets/{{ $pet->id }}" margin>
        {{ method_field('PATCH') }}
        {{csrf_field()}}

        <div class="field">
            <label class="label" for="pet_nickname">Pet Name</label>
            <div class="control">
                <input type="text" class="input" name="pet_nickname" placeholder="Pet Title" value="{{ $pet->pet_nickname }}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="pet_about">Pet About</label>
            <div class="control">
                <textarea name="pet_about" class="textarea">{{ $pet->pet_about }}</textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Update Pet</button>
            </div>
        </div>
    </form>

    <form method="POST" action="/pets/{{ $pet->id }}">
        @method('DELETE')
        @csrf
        {{--{{ method_field('DELETE') }}--}}
        {{--{{csrf_field()}}--}}
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Delete Pet</button>
            </div>
        </div>
    </form>
@endsection

