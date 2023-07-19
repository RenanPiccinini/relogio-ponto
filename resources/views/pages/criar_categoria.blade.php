@extends('layouts.admin')

@section('content')

    <div class="main-content">
        <div class="page-content">
            <h1>Criar Categoria</h1>

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

            <form action="{{ route('criar-categoria-post') }}" method="POST">
                @csrf

                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label for="nome_categoria">Nome da categoria</label>
                        <input type="text" class="form-control" name="nome_categoria"  placeholder="Nome da categoria">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Salvar</button>
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
