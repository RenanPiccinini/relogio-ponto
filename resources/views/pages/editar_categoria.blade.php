@extends('layouts.admin')

@section('content')

<div class="main-content">
    <div class="page-content">
        <h1>Editar Categoria</h1>

        @if(session('error'))
            <div class="alert alert-danger col-md-3" id="alert" role="alert">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('editar-categoria-post', $categoria->id) }}" method="POST" class="col-md-12">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{ $categoria->id }}">

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="nome_categoria">Nome</label>
                        <input type="text" class="form-control" id="nome_categoria" name="nome_categoria" value="{{ $categoria->nome_categoria }}">
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-success mt-3">Salvar</button>
        </form>

    </div>
</div>

@endsection

<script>

setTimeout(function() {
    var alertElement = document.getElementById('alert');
    if (alertElement) {
        alertElement.remove();
    }
}, 4000);

</script>
