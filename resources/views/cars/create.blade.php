@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Adicionar Novo Carro</h1>
    
    <!-- Exibe os erros de validação, se houver -->
    @if ($errors->any())
        <div class="alert alert-danger mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Formulário para criar um novo carro -->
    <form action="{{ route('cars.store') }}" method="POST">
        @csrf
        
        <div class="form-group mb-3">
            <label for="marca">Marca</label>
            <input type="text" class="form-control" id="marca" name="marca" value="{{ old('marca') }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="modelo">Modelo</label>
            <input type="text" class="form-control" id="modelo" name="modelo" value="{{ old('modelo') }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="ano">Ano</label>
            <input type="number" class="form-control" id="ano" name="ano" value="{{ old('ano') }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Adicionar Carro</button>
        <a href="/" class="btn btn-secondary">Voltar para Lista</a>
    </form>
</div>
@endsection
