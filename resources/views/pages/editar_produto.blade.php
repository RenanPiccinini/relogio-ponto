@extends('layouts.admin')

@section('content')

<div class="main-content">
    <div class="page-content">
        <h1>Editar Produto</h1>

        @if(session('error'))
            <div class="alert alert-danger col-md-3" id="alert" role="alert">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('editar-produto-post', $produto->id) }}" method="POST" class="col-md-12" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{ $produto->id }}">

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" value="{{ $produto->nome }}">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="descricao">Descrição</label>
                        <input type="text" class="form-control" id="descricao" name="descricao" value="{{ $produto->descricao }}">
                    </div>
                </div>

                <div class="col-md-3">
                  <div class="form-group">
                    <label for="preco">Preço</label>
                    <input type="text" class="form-control" id="preco" name="preco" value="{{ $produto->preco }}">
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="form-group">
                    <label for="marca">Marca</label>
                    <input type="text" class="form-control" id="marca" name="marca" value="{{ $produto->marca }}">
                  </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group mt-2">
                        <label for="categoria">Categoria</label>
                        <select id="categoria" class="form-control" name="categoria">
                            @foreach ($categorias as $categoria)
                                <option value="{{ $categoria->nome_categoria }}" {{ $produto->categoria == $categoria->nome_categoria ? 'selected' : '' }}>
                                    {{ $categoria->nome_categoria }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>


                <div class="col-md-3">
                    <div class="form-group mt-2">
                        <label for="subcategoria">Subcategoria</label>
                        <select id="subcategoria" class="form-control" name="subcategoria">
                            @foreach ($subcategorias as $subcategoria)
                                <option value="{{ $subcategoria->nome_subcategoria }}" {{ $produto->subcategoria == $subcategoria->nome_subcategoria ? 'selected' : '' }}>
                                    {{ $subcategoria->nome_subcategoria }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>


                <div class="col-md-3">
                    <div class="form-group mt-2">
                      <label for="estoque">Estoque</label>
                      <input type="text" class="form-control" id="estoque" name="estoque" value="{{ $produto->estoque }}">
                    </div>
                </div>

                  <div class="col-md-3">
                    <div class="form-group mt-2">
                      <label for="tamanho">Tamanho</label>
                      <input type="text" class="form-control" id="tamanho" name="tamanho" value="{{ $produto->tamanho }}">
                    </div>
                </div>

                  <div class="col-md-3">
                    <div class="form-group mt-2">
                      <label for="cor">Cor</label>
                      <input type="text" class="form-control" id="cor" name="cor" value="{{ $produto->cor }}">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group mt-2">
                      <label for="imagem">Imagem(Se não enviar será mantido a imagem anterior)</label>
                      <input type="file" class="form-control" id="imagem" name="imagem">
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
