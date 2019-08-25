@extends('layouts.app')

@section('css')
 <!-- Styles -->
 <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">

@section('content')
    <h1 class="titulo">{{ $data['title'] }}</h1>
    <h4 class="subtitulo">{{$data['subtitle']}}</h4>
@endsection