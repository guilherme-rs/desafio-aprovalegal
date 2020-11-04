  
@extends('layout.home')
@section('conteudo')
    <div class="container">
        <div class="col-xs-8">
            <h1> Cadastro de Empresas </h1>
            <form method="post" action="{{ route('company.update', $id) }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="PUT">
                <div class="form-group">
                    <label for="razao">Razão Social: </label>
                    <input type="text" class="form-control" id="razao" name="razao" value="{{ $razao ?? '' }}">
                </div>
                <div class="form-group">
                    <label for="fantasia">Nome Fantasia: </label>
                    <input type="text"  class="form-control" id="fantasia" name="fantasia" value="{{ $fantasia ?? '' }}"></textarea>
                </div>
                <button type="submit" class="btn btn-primary"> Salvar </button>
            </form>
        </div>
    </div>
@endsection