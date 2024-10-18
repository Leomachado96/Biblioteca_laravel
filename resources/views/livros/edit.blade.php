@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Livro</h1>
    <form action="{{ route('livros.update', $livro->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="titulo" class="form-label">Título do Livro</label>
            <input type="text" class="form-control" id="titulo" name="titulo" value="{{ $livro->titulo }}" required>
        </div>
        <div class="mb-3">
            <label for="autor" class="form-label">Autor</label>
            <input type="text" class="form-control" id="autor" name="autor" value="{{ $livro->autor }}" required>
        </div>
        <div class="mb-3">
            <label for="isbn" class="form-label">ISBN</label>
            <input type="text" class="form-control" id="isbn" name="isbn" value="{{ $livro->isbn }}" required>
        </div>
        <div class="mb-3">
            <label for="editora" class="form-label">Editora</label>
            <input type="text" class="form-control" id="editora" name="editora" value="{{ $livro->editora }}" required>
        </div>
        <div class="mb-3">
            <label for="ano_publicacao" class="form-label">Ano de Publicação</label>
            <input type="number" class="form-control" id="ano_publicacao" name="ano_publicacao" value="{{ $livro->ano_publicacao }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar Livro</button>
    </form>
</div>
@endsection
