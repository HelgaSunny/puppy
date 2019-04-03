@extends('layout')

@section('head title','Creating a pet')

@section('add scripts')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="script">
@endsection

@section('add styles')
    <link href="{{URL::asset('css/dog.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/cat.css')}}" rel="stylesheet">
{{--    <link href="{{URL::asset('css/cat2.css')}}" rel="stylesheet">--}}
@endsection

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

@section('container past-content')
    <div class="opCat">
        <div class="container">
            <svg id="cat" width="355" height="700">

                <radialGradient id="grad2" cx="50%" cy="50%" r="40%" fx="40%" fy="60%">
                    <stop offset="0%" style="stop-color:#CA5B6C;
		      stop-opacity:1" />
                    <stop offset="100%" style="stop-color:#A83D52;stop-opacity:1" />
                </radialGradient>
                <linearGradient id="grad5" x1="0%" y1="0%" x2="100%" y2="0%">
                    <stop offset="0%" style="stop-color:#462536;stop-opacity:1" />
                    <stop offset="100%" style="stop-color:#21111B;stop-opacity:1" />
                </linearGradient>
                <radialGradient id="grad3" cx="50%" cy="50%" r="40%" fx="40%" fy="60%">
                    <stop offset="0%" style="stop-color:#7F243D;
		      stop-opacity:1" />
                    <stop offset="100%" style="stop-color:#7E3952;stop-opacity:1" />
                </radialGradient>
                <linearGradient id="grad4" x1="0%" y1="0%" x2="0%" y2="100%">
                    <stop offset="0%" style="stop-color:#A46C79;stop-opacity:1" />
                    <stop offset="100%" style="stop-color:#893556;stop-opacity:1" />
                </linearGradient>


                <path id="ear-right" class="cat-ear" d="M242,104 C263,10 290,10 298,15 C310,60 297,120 288,140 Z" stroke="black" fill="none" />
                <path id="ear-left" class="cat-ear" d="M197,105 C180,40 167,13 150,13 C155,9 115,40 151,140 Z" stroke="black" fill="none" />
                <path id="cat-innerear-left" class="cat-inner-ear" d="M179,104 C179,40 148,13 150,13 C155,9 115,40 151,130 Z" style="fill: url(#grad4)" />
                <path id="cat-innerear-right" class="cat-inner-ear" d="M262,104 C270,10 295,10 298,16 C310,60 297,120 288,130 Z" style="fill: url(#grad4)" />
                <path id="cat-body" d="M250,220 C275,290 268,315 250,383 C243,405 200,455 247,496 C250,498 253,506 242,507 Q240,513 231,509.5 Q227,513 224,511.5 Q220,516 214,513.5 Q201,523 192,510 L184,510 Q180,515 175,512 Q170,520 148,511.5 Q114,520 80,511 C35,540 55,610 80,625 Q130,655 178,627 C191,610 203,580 180,572 C161,565 150,545 183,544 C218,560 230,615 185,653 Q126,680 67,652 C20,627 10,540 51,494 Q40,431 58,379 Q70,350 97,330 C140,300 185,240 187,220 Z" style="fill: url(#grad5)" />
                <path id="cat-head" class="cat-colorset1" d="M135,185 C150,75 290,73 304,185 C290,240 150,260 135,185" style="fill: url(#grad5)" />
                <path id="cat-eye-left" class="cat-eye" d="M154.5,170 C159,129 202,123 206,169.5 C198,196 165,200 154.5,170" stroke="black" />
                <path id="cat-eye-right" class="cat-eye" d="M235,168 C236,124.5 278,122 287,166 C278,196 246,197 235,168" />
                <ellipse id="cat-pupil-left" class="cat-pupils" cx="188.5" cy="158" rx="4" ry="10" />
                <ellipse id="cat-pupil-right" class="cat-pupils" cx="250.5" cy="158" rx="4" ry="10" />
                <path id="cat-nose" d="M211,179 Q221,170.5 231,179 Q226,179 220.5,183 Q215.5,179 211,179" stroke="black" fill="none" />


                <path class="cat-bowie" d="M209,255 L187,309 Q195,315 205,309 L220,255 Z" style="fill: url(#grad3)" />
                <path class="cat-bowie" d="M227,255 L235,312 Q243,315 251,309 L238,255 Z" style="fill: url(#grad3)" />
                <path id="cat-ribbon" class="cat-bow" d="M181,231 Q199,225 217,236 Q224,233 232,237 Q247,225 262,229 Q270,247 261,265 Q246,265 232,255 Q224,261 215,255 Q201,265 186,266 Q177,248 181,231" style="fill: url(#grad2)" />
            </svg>
        </div>
        {{--<script type="text/javascript" href="{{URL::asset('js/cat2.js')}}">Create</script>--}}
    </div>
@endsection()
