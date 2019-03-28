@extends('layout')

@section('head title','Creating a pet')

@section('container content')
    <form method="POST" action="/pets">
        {{csrf_field()}}
        <div class="field">
            <label class="label" for="pet_nickname">Pet Nickname</label>

            <div class="control">
                <input type="text"
                       name="pet_nickname"
                       autocomplete="off"
                       class="input {{ $errors -> has('pet_nickname') ? 'is-danger' : '' }}"
                       value="{{ old('pet_nickname') }}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="pet_type">Pet Type</label>

            <div class="control">
                <input type="text"
                       name="pet_type"
                       autocomplete="off"
                       class="input {{ $errors -> has('pet_type') ? 'is-danger' : '' }}"
                       value="{{ old('pet_type') }}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="pet_about">Pet About</label>

            <div class="control">
            <textarea name="pet_about"
                      class="textarea {{ $errors -> has('pet_about') ? 'is-danger' : '' }}"
                      autocomplete="off">{{ old('pet_about') }}</textarea>
            </div>
        </div>

        <div class="field">
            <label class="label" for="user_id">User ID</label>

            <div class="control">
                <input type="number"
                       name="user_id"
                       autocomplete="off"
                       class="input {{ $errors -> has('user_id') ? 'is-danger' : '' }}"
                       {{ old('user_id') }}>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Create pet</button>
            </div>
        </div>

        @if($errors->any())
            <div class="notification is-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>
@endsection
