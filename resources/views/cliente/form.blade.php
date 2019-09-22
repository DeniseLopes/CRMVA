@extends('template')
@section('title', $data['title'])
@section('body')
<!-- Styles -->

<div class="row justify-content-center">
    <div class="col-md-12">

        @if(session('message'))
        <div class="alert alert-warning">
            {{ session('message') }}
        </div>
        @endif

        <form method="POST" action="{{ $data['url'] }}">
            @if(isset($cliente))
            @method('PUT')
            @endif

            @csrf
            <!--Nome Cliente 
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right text-dark">{{ __('Nome') }}</label>
                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="nome" value="{{(!isset($cliente)) ? old('name'): $cliente->nome}}" required autocomplete="name" autofocus>
                    </div>
                </div>-->
            <!--Fim Nome Cliente -->

            <!--Email Cliente 
                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right text-dark">{{ __('E-Mail') }}</label>
                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{(!isset($cliente)) ? old('email') : $cliente->user->email}}" required autocomplete="email">
                    </div>
                </div>-->
            <!--Fim Email Cliente -->

            <!--Data de Nascimento Cliente 
                <div class="form-group row">
                    <label for="data_nascimento" class="col-md-4 col-form-label text-md-right text-dark">Data de Nascimento</label>
                    <div class="col-md-6">
                        <input id="data_nascimento" type="date" class="form-control" name="data_nascimento">
                    </div>
                </div>-->
            <!--Fim Data de Nascimento-->

            <p class="   card-header text-secondary font-weight-bold text-left bg-light">Informações do Cliente:</p>
            <div action="" class="form-row">
                <div class="col-md-4">
                    <label for="nome">Nome: </label>
                    <input type="text" class="form-control " id="nome">
                        <div class="valid-tooltip">
                            por favor, insira um nome.
                        </div>
                </div>
                <div class="col-md-4">
                    <label for="email">Email: </label>
                    <input type="text" class="form-control" id="email">
                    <div class="valid-tooltip">
                        por favor, insira um email.
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="email">Data de Nascimento: </label>
                    <input type="date" class="form-control" id="dt_nascimento">
                    <div class="valid-tooltip">
                        por favor, insira um email.
                    </div>
                </div>
            </div>

            <hr>
            <p class=" card-header text-secondary text-left font-weight-bold bg-light">Endereço:</p>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationTooltip01">Cep</label>
                    <input type="text" class="form-control" id="validationTooltip01" required>
                    <div class="valid-tooltip">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationTooltip02">Logradouro</label>
                    <input type="text" class="form-control" id="validationTooltip02"  required>
                    <div class="valid-tooltip">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationTooltipUsername">Bairro</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                        </div>
                        <input type="text" class="form-control" id="validationTooltipUsername"  aria-describedby="validationTooltipUsernamePrepend" required>
                        <div class="invalid-tooltip">
                            Please choose a unique and valid username.
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationTooltip03">Cidade</label>
                    <input type="text" class="form-control" id="validationTooltip03"  required>
                    <div class="invalid-tooltip">
                        Please provide a valid city.
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationTooltip04">Estado</label>
                    <input type="text" class="form-control" id="validationTooltip04"  required>
                    <div class="invalid-tooltip">
                        Please provide a valid state.
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationTooltip05">Zip</label>
                    <input type="text" class="form-control" id="validationTooltip05" required>
                    <div class="invalid-tooltip">
                        Please provide a valid zip.
                    </div>
                </div>
            </div>
            <hr>
            <p class="   card-header text-secondary font-weight-bold text-left bg-light">Telefones:</p>
            <div action="" class="form-row">
                <div class="col-md-4">
                    <label for="nome">Tipo telefone: </label>
                    <select class="form-control custom-select" id="tipo_telefone" >
                        <option value="">Celular</option>
                        <option value="">Residencial</option>
                        <option value="">Comercial</option>
                    </select>
                    <div class="valid-tooltip">
                        por favor, insira um tipo telefone.
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="email">Numero: </label>
                    <input type="text" class="form-control" id="email">
                    <div class="valid-tooltip">
                        por favor, insira um email.
                    </div>
                </div>
           

            </div>
            <hr>
            <div class="row col-12" style="justify-content: flex-end;">
                <button class="btn btn-primary btn-lg" type="submit"> {{ __('Salvar') }}</button>
            </div>

            <!--Fim Endereco-->
            <!--Botao Salvar -->

            <!--Fim Botao Salvar -->
        </form>


    </div>
</div>

@endsection