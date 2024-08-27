@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Editar Carro</h1>
    
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

    <!-- Formulário para editar um carro existente -->
    <form action="{{ route('cars.update', $car->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group mb-3">
            <label for="marca">Marca</label>
            <input type="text" class="form-control" id="marca" name="marca" value="{{ old('marca', $car->marca) }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="modelo">Modelo</label>
            <input type="text" class="form-control" id="modelo" name="modelo" value="{{ old('modelo', $car->modelo) }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="ano">Ano</label>
            <input type="number" class="form-control" id="ano" name="ano" value="{{ old('ano', $car->ano) }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Atualizar Carro</button>
    </form>
</div>
@endsection
