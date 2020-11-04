@extends('layout.home')
@section('conteudo')
    <h1> Empresas </h1>

<a class="btn btn-primary" href="{{ route('company.create') }}">Adicionar</a>

    <table class="table table-hover">
        <thead>
            <th> ID </th>
            <th> Razão Social </th>
            <th> Nome Fantasia </th>
            <th> CNPJ </th>
            <th colspan="2" class="text-center"> Opções </th>
        </thead>
        <tbody>
          @forelse ($companies as $company)
              <tr>
                <td>{{ $company->id }}</td>
                <td>{{ $company->razao_social }}</td>
                <td>{{ $company->nome_fantasia }}</td>
                <td>{{ $company->cnpj }}</td>
                <td class="opcoes">
                  <a class="btn btn-warning" href="company/{{ $company->id }}/edit">Editar</a>
                </td>
                <td>
                    <form method="post" action="{{ route('company.destroy', $company->id)}}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-sm btn-danger">Excluir</button>
                    </form>
                </td>
              </tr>
          @empty
            <tr>
              <td colspan="5" class="text-center"> Nenhuma empresa cadastrada. </td>
          </tr>
          @endforelse
        </tbody>
      </table>
  @endsection