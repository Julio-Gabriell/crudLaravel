@extends('layouts.app')

@section('content')
    <h1 class="display-3 text-center">
        Estoque
    </h1>

    @if(session('success'))
        <p class="alert alert-success text-center mt-3" role="alert">{{ session('success') }}</p>
    @endif

    <table class="table table-striped mt-5 text-center">
        <thead>
            <tr>
                <th scope="col">Id:</th>
                <th scope="col">Nome:</th>
                <th scope="col">Descrição:</th>
                <th scope="col">Valor:</th>
                <th scope="col">Editar:</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produtos as $produto)
                <tr>
                    <td>
                        {{ $produto->id }}
                    </td>
                    <td>
                        {{ $produto->nome }}
                    </td>
                    <td>
                        {{ $produto->descricao }}
                    </td>
                    <td>
                        R$ {{ number_format($produto->preco, 2, ',', '.') }}
                    </td>
                    <td>
                        <div class="d-flex align-items-center justify-content-center gap-1">
                            <a class="btn btn-primary" href="/produtos/{{ $produto->id }}/edit"><i class="fa-solid fa-pen"></i></a>
                        <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir o item {{$produto->id}}?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                        </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-center gap-3">
        <a href="/produtos/create" class="btn btn-success"><i class="fa-solid fa-plus"></i> Adicionar Produto</a>
    </div>
@endsection