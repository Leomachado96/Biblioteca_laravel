@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Livros</h1>
    <a href="{{ route('livros.create') }}" class="btn btn-success mb-3">Adicionar Novo Livro</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Autor</th>
                <th>ISBN</th>
                <th>Editora</th>
                <th>Ano de Publicação</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($livros as $livro)
                <tr>
                    <td>{{ $livro->id }}</td>
                    <td>{{ $livro->titulo }}</td>
                    <td>{{ $livro->autor }}</td>
                    <td>{{ $livro->isbn }}</td>
                    <td>{{ $livro->editora }}</td>
                    <td>{{ $livro->ano_publicacao }}</td>
                    <td>
                        <a href="{{ route('livros.edit', $livro->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('livros.destroy', $livro->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
