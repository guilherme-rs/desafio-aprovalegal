  
@extends('layout.home')
@section('conteudo')
    <div class="container">
        <div class="col-xs-8">
            <h1> Cadastro de Empresas </h1>
            <form method="post" action="{{ route('company.store') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="razao">Razão Social: </label>
                    <input type="text" class="form-control" id="razao" name="razao">
                </div>
                <div class="form-group">
                    <label for="fantasia">Nome Fantasia: </label>
                    <input type="text"  class="form-control" id="fantasia" name="fantasia"></textarea>
                </div>
                <div class="form-group">
                    <label for="cnpj">CNPJ: </label>
                    <input type="text"  class="form-control" id="cnpj" name="cnpj"></textarea>
                </div>
                <button type="submit" class="btn btn-primary"> Cadastrar </button>
            </form>
        </div>
    </div>
@endsection