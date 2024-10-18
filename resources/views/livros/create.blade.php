@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Criar Novo Livro</h1>
    <form action="{{ route('livros.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="titulo" class="form-label">Título do Livro</label>
            <input type="text" class="form-control" id="titulo" name="titulo" required>
        </div>
        <div class="mb-3">
            <label for="autor" class="form-label">Autor</label>
            <input type="text" class="form-control" id="autor" name="autor" required>
        </div>
        <div class="mb-3">
            <label for="isbn" class="form-label">ISBN</label>
            <input type="text" class="form-control" id="isbn" name="isbn" required>
        </div>
        <div class="mb-3">
            <label for="editora" class="form-label">Editora</label>
            <input type="text" class="form-control" id="editora" name="editora" required>
        </div>
        <div class="mb-3">
            <label for="ano_publicacao" class="form-label">Ano de Publicação</label>
            <input type="number" class="form-control" id="ano_publicacao" name="ano_publicacao" required>
        </div>
        <button type="submit" class="btn btn-primary">Adicionar Livro</button>
    </form>
</div>
@endsection
