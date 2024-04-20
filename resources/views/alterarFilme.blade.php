@extends('layout')

@section('content')
<div class="container mt-5">
    <h1>Alterar Filme</h1>
    <!-- Formulário para editar o filme -->
    <form action="{{ route('alterar-filme', $filme->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" class="form-control" id="titulo" name="titulo" value="{{ $filme->titulo }}">
        </div>
        <div class="mb-3">
            <label for="sinopse" class="form-label">Sinopse</label>
            <textarea class="form-control" id="sinopse" name="sinopse">{{ $filme->sinopse }}</textarea>
        </div>
        <div class="mb-3">
            <label for="imagem" class="form-label">Imagem</label>
            <input type="file" class="form-control" id="imagem" name="imagem">
        </div>
        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
    </form>
</div>
@endsection
