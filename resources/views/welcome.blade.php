@extends('layout')

@section('head title','Welcome to the Pet for rent space! We hope you\'ll enjoy your experience!')
@section('add styles')
    <link href="{{URL::asset('css/dog.css')}}" rel="stylesheet">
@endsection

@section('project','Welcome to Pet for Rent!')

@section('links')
    <div class="links">
        {{--<a href="https://laravel.com/docs">Docs</a>--}}
        {{--<a href="https://laracasts.com">Laracasts</a>--}}
        {{--<a href="https://laravel-news.com">News</a>--}}
        {{--<a href="https://blog.laravel.com">Blog</a>--}}
        {{--<a href="https://nova.laravel.com">Nova</a>--}}
        {{--<a href="https://forge.laravel.com">Forge</a>--}}
        {{--<a href="https://github.com/laravel/laravel">GitHub</a>--}}
    </div>
@endsection

@section('container past-content')
    <div class="opDog">
        <div class="🐕">
            <div class="torso">
                <div class="fur">
                    <div class="spot"></div>
                </div>
                <div class="neck">
                    <div class="fur"></div>
                    <div class="head">
                        <div class="fur">
                            <div class="snout"></div>
                        </div>
                        <div class="ears">
                            <div class="ear">
                                <div class="fur"></div>
                            </div>
                            <div class="ear">
                                <div class="fur"></div>
                            </div>
                        </div>
                        <div class="eye"></div>
                    </div>
                    <div class="collar">

                    </div>
                </div>
                <div class="legs">
                    <div class="leg">
                        <div class="fur"></div>
                        <div class="leg-inner">
                            <div class="fur"></div>
                        </div>
                    </div>
                    <div class="leg">
                        <div class="fur"></div>
                        <div class="leg-inner">
                            <div class="fur"></div>
                        </div>
                    </div>
                    <div class="leg">
                        <div class="fur"></div>
                        <div class="leg-inner">
                            <div class="fur"></div>
                        </div>
                    </div>
                    <div class="leg">
                        <div class="fur"></div>
                        <div class="leg-inner">
                            <div class="fur"></div>
                        </div>
                    </div>
                </div>
                <div class="tail">
                    <div class="tail">
                        <div class="tail">
                            <div class="tail -end">
                                <div class="tail">
                                    <div class="tail">
                                        <div class="tail">
                                            <div class="tail"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
