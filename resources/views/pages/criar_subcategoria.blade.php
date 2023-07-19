@extends('layouts.admin')

@section('content')

<div class="main-content">
    <div class="page-content">
        <h1>Criar Subcategoria</h1>

        @if(session('error'))
            <div class="alert alert-danger col-md-3" id="alert" role="alert">
                {{ session('error') }}
            </div>
        @endif

        @if($errors->any()) {{-- método any retorna true se tiver errors, é false por default --}}
            <div class="alert alert-danger rounded-3" id="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
            </div>
        @endif

        <form action="{{ route('criar-subcategoria-post') }}" method="POST">
            @csrf

            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="nome_subcategoria">Nome da Subcategoria</label>
                    <input type="text" class="form-control" name="nome_subcategoria"  placeholder="Nome da Subcategoria">
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Salvar</button>
        </form>

    </div>
</div>

@endsection

<script>
    // Aguarda 3 segundos e remove o alerta
    setTimeout(function() {
        var alertElement = document.getElementById('alert');
        if (alertElement) {
            alertElement.remove();
        }
    }, 4000);
</script>
