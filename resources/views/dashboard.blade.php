@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome! How are you today?
                </div>

                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>Pet</th>
                            <th></th>
                            <th></th>
                            @foreach($pets as $pet)
                                <th>{{$pet->per_nickname}}</th>
                                <th><a href="/pets/{{$pet->id}}/edit" class="btn btn-sm">Edit Pet info</a></th>
                                <th></th>
                                Foreach Loop here
                            @endforeach
                        </tr>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
