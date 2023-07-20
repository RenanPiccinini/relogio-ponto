@extends('layouts.admin')

@section('content')

<div class="main-content">
    <div class="page-content">
        <h1>Detalhes do Produto</h1>

        @if(session('error'))
            <div class="alert alert-danger col-md-3" id="alert" role="alert">
                {{ session('error') }}
            </div>
        @endif

            <input type="hidden" name="id" value="{{ $produto->id }}">

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" value="{{ $produto->nome }}" disabled>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="descricao">Descrição</label>
                        <input type="text" class="form-control" id="descricao" name="descricao" value="{{ $produto->descricao }}" disabled>
                    </div>
                </div>

                <div class="col-md-3">
                  <div class="form-group">
                    <label for="preco">Preço</label>
                    <input type="text" class="form-control" id="preco" name="preco" value="{{ $produto->preco }}" disabled>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="form-group">
                    <label for="marca">Marca</label>
                    <input type="text" class="form-control" id="marca" name="marca" value="{{ $produto->marca }}" disabled>
                  </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group mt-2">
                        <label for="categoria">Categoria</label>
                        <input type="text" class="form-control" id="categoria" name="categoria" value="{{ $produto->categoria }}" disabled>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group mt-2">
                        <label for="subcategoria">Subcategoria</label>
                        <input type="text" class="form-control" id="subcategoria" name="subcategoria" value="{{ $produto->subcategoria }}" disabled>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group mt-2">
                      <label for="estoque">Estoque</label>
                      <input type="text" class="form-control" id="estoque" name="estoque" value="{{ $produto->estoque }}" disabled>
                    </div>
                </div>

                  <div class="col-md-3">
                    <div class="form-group mt-2">
                      <label for="tamanho">Tamanho</label>
                      <input type="text" class="form-control" id="tamanho" name="tamanho" value="{{ $produto->tamanho }}" disabled>
                    </div>
                </div>

                  <div class="col-md-3">
                    <div class="form-group mt-2 mb-4">
                      <label for="cor">Cor</label>
                      <input type="text" class="form-control" id="cor" name="cor" value="{{ $produto->cor }}" disabled>
                    </div>
                </div>

                <h5>Imagens:</h5>

                <div class="col-md-4">
                    <div class="form-group mt-2">
                      {{-- <label for="imagem">Imagem 1</label> --}}
                        <img src="{{ env('APP_URL') }}/storage/imagens-produtos/{{ $produto->imagem }}" alt="" width="120px">
                    </div>
                </div>

                @if($produto->imagem2)
                    <div class="col-md-4">
                        <div class="form-group mt-2">
                        {{-- <label for="imagem">Imagem 2</label> --}}
                            <img src="{{ env('APP_URL') }}/storage/imagens-produtos/{{ $produto->imagem2 }}" alt="" width="120px">
                        </div>
                    </div>
                @endif

                @if($produto->imagem3)
                    <div class="col-md-4">
                        <div class="form-group mt-2">
                        {{-- <label for="imagem">Imagem 3</label> --}}
                            <img src="{{ env('APP_URL') }}/storage/imagens-produtos/{{ $produto->imagem3 }}" alt="" width="120px">
                        </div>
                    </div>
                @endif

                @if($produto->imagem4)
                    <div class="col-md-4">
                        <div class="form-group mt-2">
                        {{-- <label for="imagem">Imagem 4</label> --}}
                            <img src="{{ env('APP_URL') }}/storage/imagens-produtos/{{ $produto->imagem4 }}" alt="" width="120px">
                        </div>
                    </div>
                @endif

                @if($produto->imagem5)
                    <div class="col-md-4">
                        <div class="form-group mt-2">
                        {{-- <label for="imagem">Imagem 5</label> --}}
                            <img src="{{ env('APP_URL') }}/storage/imagens-produtos/{{ $produto->imagem5 }}" alt="" width="120px">
                        </div>
                    </div>
                @endif

                @if($produto->imagem6)
                    <div class="col-md-4">
                        <div class="form-group mt-2">
                        {{-- <label for="imagem">Imagem 6</label> --}}
                            <img src="{{ env('APP_URL') }}/storage/imagens-produtos/{{ $produto->imagem6 }}" alt="" width="120px">
                        </div>
                    </div>
                @endif
            </div>
            <a href="{{ route('editar-produto', $produto->id) }}" class="btn btn-primary mt-5">Editar Produto</a href="{{ route('editar-produto', $produto->id) }}">
            <a href="{{ route('produtos') }}" class="btn btn-primary mt-5">Voltar</a>
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
