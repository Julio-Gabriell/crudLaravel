@extends('layouts.app')

@section('content')
    <h1 class="display-3 text-center">
        Editar produtos
    </h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $erro)
                <li>{{ $erro }}</li>
            @endforeach
        </ul>
    </div>
@endif  

        <form action="{{ route('produtos.update', $produto->id) }}" method="post">
            @csrf
            @method('PUT')
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" name="nome" id="nome" value="{{ $produto->nome }}" class="form-control">

            <label for="descricao" class="form-label">Descrição:</label>
            <input type="text" name="descricao" id="descricao" value="{{ $produto->descricao }}" class="form-control">

            <label for="preco" class="form-label">Preço:</label>
            <input type="number" step="0.01" name="preco" id="preco" value="{{ $produto->preco }}" class="form-control">

            <div class="d-flex justify-content-center gap-3 py-3">
                <button type="submit" class="btn btn-success"><i class="fa-solid fa-check"></i> Confirmar</button>
                <a href="/" class="btn btn-danger"><i class="fa-solid fa-ban"></i> Cancelar</a>
            </div>
        </form>
@endsection