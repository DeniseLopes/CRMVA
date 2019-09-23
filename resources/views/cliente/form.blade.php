@extends('template')
@section('title', $data['title'])
@section('body')
<!-- Styles -->

<!--Formulário do Cliente -->
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
            <p class="   card-header text-secondary font-weight-bold text-left bg-light">Informações do Cliente:</p>

            <div action="" class="form-row">
                <!--Nome do Cliente -->
                <div class="col-md-4">
                    <label for="nome">Nome: </label>
                    <input type="text" class="form-control " id="nome" name="nome" required>
                    <div class="valid-tooltip">
                        por favor, insira um nome.
                    </div>
                </div>
                <!--Nome do Email -->
                <div class="col-md-4">
                    <label for="email">Email: </label>
                    <input type="text" class="form-control" id="email" name="email">
                    <div class="valid-tooltip">
                        por favor, insira um email.
                    </div>
                </div>
                <!--Data de nascimento -->
                <div class="col-md-4">
                    <label for="email">Data de Nascimento: </label>
                    <input type="date" class="form-control" id="dt_nascimento" name="dt_nascimento" required>
                    <div class="valid-tooltip">
                        por favor, preencha a data de nascimento.
                    </div>
                </div>

            </div>

            <hr>
            <!--Endereco-->
            <p class=" card-header text-secondary text-left font-weight-bold bg-light">Endereço:</p>

            <div class="form-row">
                <!--CEP -->
                <div class="col-md-2">
                    <label for="validationTooltip01">Cep</label>
                    <input type="text" class="form-control cep" id="validationTooltip01 " name="cep" required>
                    <div class="valid-tooltip">
                        por favor, insira o cep.
                    </div>
                </div>
                <!--Logradouro-->
                <div class="col-md-5">
                    <label for="validationTooltip02">Logradouro</label>
                    <input type="text" class="form-control rua" id="validationTooltip02" name="logradouro">
                </div>

                <!--Numero-->
                <div class="col-md-2">
                    <label for="validationTooltip02">Numero</label>
                    <input type="text" class="form-control endereco_numero " id="validationTooltip02" name="endereco_numero">
                </div>

                <!--Complemento-->
                <div class="col-md-3 mb-3">
                    <label for="validationTooltip05">Complemento</label>
                    <input type="text" class="form-control complemento" id="validationTooltip05" name="complemento">
                </div>

            </div>
            <div class="form-row">
                <!--Bairro -->
                <div class="col-md-5 mb-2">
                    <label for="validationTooltipUsername">Bairro</label>
                    <div class="input-group">
                        <input type="text" class="form-control bairro" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" name="bairro">
                    </div>
                </div>
                <!--cidade-->
                <div class="col-md-5 mb-3">
                    <label for="validationTooltip03">Cidade</label>
                    <input type="text" class="form-control cidade" id="validationTooltip03" name="cidade">
                </div>
                <!--estado-->
                <div class="col-md-2 mb-3">
                    <label for="validationTooltip04">Estado</label>
                    <input type="text" class="form-control estado" id="validationTooltip04" name="uf">
                </div>


            </div>

            <hr>

            <p class="   card-header text-secondary font-weight-bold text-left bg-light">Telefones:</p>
            <div action="" class="form-row">

                <div class="col-md-4">
                    <label for="nome">Tipo telefone: </label>
                    <select class="form-control custom-select" id="tipo_telefone" name="tipo_telefone_id">
                        <option value="">selecione</option>
                        <option value="1">Celular</option>
                        <option value="2">Residencial</option>
                        <option value="3">Comercial</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="email">Código do país: </label>

                    <input type="text" class="form-control" id="cod_pais" name="cod_pais">

                </div>
                <div class="col-md-1">
                    <label for="email">DDD: </label>

                    <input type="text" class="form-control" id="ddd" name="ddd">

                </div>
                <!--Numero de telefone -->
                <div class="col-md-3">
                    <label for="email">Numero: </label>
                    <input type="text" class="form-control" id="numero" name="numero_telefone">

                </div>
                <p></p>
                <div class="col-md-2" style="display:flex; justify-content:center ; align-items:center; margin-top:30px;">
                    <button class="btn btn-md btn-success">Novo</button>
                </div>
            </div>

            <hr>

            <p class="   card-header text-secondary font-weight-bold text-left bg-light bg-gradient-dark">Documentos:</p>
            <div action="" class="form-row">
                <div class="col-lg-2 col-md-6 col-sm-12">
                    <label for="nome"> Documento: </label>
                    <select class="form-control custom-select tipo_documento" id="tipo_documento" name="tipo_documento_id">
                        <option value="0">Selecione</option>
                        <option value="1">CPF</option>
                        <option value="2">Passaporte</option>
                    </select>
                </div>

                <!--Numero Doc -->
                <div class="col-lg-4 col-md-6 col-sm-12 numero">
                    <label for="numero">Numero: </label>
                    <input type="text" class="form-control" id="numero" name="numero_documento">
                    <div class="valid-tooltip">
                        por favor, insira um email.
                    </div>
                </div>

                <!--Data de emissão Passaporte-->

                <div class="col-lg-2 col-md-6 col-sm-12 datas">
                    <label for="emissao">Emissão</label>
                    <input type="date" class="form-control dt_emissao" name="dt_emissao">
                </div>

                <!--Data de vencimento Passaporte-->
                <div class="col-lg-2 col-md-6 col-sm-12 datas">
                    <label for="emissao">Vencimento</label>
                    <input type="date" class="form-control dt_emissao" name="dt_vencimento">
                </div>
            </div>

            <!--botao-->
            <div class="row col-12" style="justify-content: flex-end;">
                <button class="btn btn-primary btn-lg" type="submit"> {{ __('Salvar') }}</button>
            </div>
        </form>
        <!--FIM Formulário do Cliente -->

    </div>
</div>

@endsection
@section('js')
<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        $('.numero').hide()
        $('.datas').hide()

        $('.tipo_documento').change(function() {
            var tipo_documento = $('.tipo_documento').val()
            if (tipo_documento == 1) {
                $('.numero').fadeIn()
                $('.datas').fadeOut();
            } else if (tipo_documento == 2) {
                $('.numero').fadeIn()
                $('.datas').fadeIn()
            } else {
                $('.numero','.datas').fadeOut()
            //    $('.datas').hide()

            }
        })
        $('.cep').blur(function() {
            var c = $('.cep').val();
            console.log(c)
            var urlCep = 'https://viacep.com.br/ws/' + c + '/json';
            console.log(urlCep)
            var validacep = /^[0-9]{8}$/
            if (validacep.test(c)) {
                $.ajax({
                    url: urlCep,
                    type: 'get'


                }).done(function(e) {
                    if (!("erro" in e)) {
                        console.log("ok" + e.logradouro)
                        $('.rua').val(e.logradouro);
                        $('.bairro').val(e.bairro);
                        $('.cidade').val(e.localidade);
                        $('.estado').val(e.uf);
                        $('.complemento').val(e.complemento);

                        $()

                    } else
                        console.log("erro in dados")

                }).fail(function() {
                    console.log('fail')
                })
            }
        })
    })
</script>