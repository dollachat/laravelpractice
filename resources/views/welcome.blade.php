@extends('layouts.app')

@section('content')
{!! HTML::style('css/app.css') !!}
<h1>HackerPair Helps You Build Stuff Faster.</h1>

<p>
    Learn, teach, hack, and make friends with developers in your city.
</p>

{!! HTML::image('img/5pikachu.png', 'HackerPair logo') !!}
{{-- <img src="{{ asset('img/5pikachu.png') }}"/> --}}

@endsection
