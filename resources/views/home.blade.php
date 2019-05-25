
@extends('template')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Página Inicial</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        
                    <span> Bem vindo, {{Auth::user()->name}}!</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<style>
span{
    color:#0d0d0d;
    font-weight: bold;
}
</style>