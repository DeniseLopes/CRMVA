@extends('layouts.app')

@section('css')
<!-- Styles -->
<link href="{{ asset('css/login.css') }}" rel="stylesheet">
<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

@section('content')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
    <div id="formContent">
        <!-- Tabs Titles -->

        <!-- Icon -->
        <div class="fadeIn first">
            <i class="material-icons " style="font-size: 80px;">
                person
            </i>
        </div>
        <form method="POST" action="/login">
            @csrf
            <!-- Login Form -->
            <form>
                <input type="text" id="email" class="fadeIn second @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="login">
                <input type="text" id="password" class="fadeIn third" name="login" placeholder="password">
                <input type="submit" class="fadeIn fourth" value="Log In">
            </form>

            <!-- Remind Passowrd -->
            <div id="formFooter">
                <a class="underlineHover" href="#">Forgot Password?</a>
            </div>

    </div>
</div>
</form>
<article class="bg-dark html">
    <div class="card-body text-center">
        <p class="   text-white">Desenvolvido por Denise Lopes - IFSP - Caraguatatuba </p> <br>
    </div>
</article>

@endsection