@extends('layout.site')

@section('titulo','Cursos')

@section('conteudo')
  <div class="container">
    <h3 class="center">Lista de cursos</h3>
    <div class="row">
      <table>
        <thead>
          <tr>
            <th>Id</th>
            <th>Título</th>
            <th>Descrição</th>
            <th>Imagem</th>
            <th>Publicado</th>
            <th>Ação</th>
          </tr>
        </thead>
        <tbody>
          @foreach($registros as $registro)
            <tr>
              <td>{{ $registro->id }}</td>
              <td>{{ $registro->titulo }}</td>
              <td>{{ $registro->descricao }}</td>
              <td><img height="60" src="{{asset($registro->imagem)}}" alt="{{ $registro->titulo }}" /></td>
              <td>{{ $registro->publicado ? 'Sim' : 'Não' }}</td>
              <td>
                <a class="btn deep-orange" href="{{ route('admin.cursos.editar', $registro->id) }}">Editar</a>
                <form action="{{ route('admin.cursos.deletar', $registro->id) }}" method="post" style="display:inline-block;">
                  {{ csrf_field() }}
                  <input type="hidden" name="_method" value="DELETE">
                  <button type="submit" class="btn red" onclick="return confirm('Confirma a exclusão?')">Deletar</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="row">
      <a class="btn blue" href="{{ route('admin.cursos.adicionar') }}">Adicionar</a>
    </div>
  </div>
@endsection
