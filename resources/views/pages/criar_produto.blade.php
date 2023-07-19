@extends('layouts.admin')

@section('content')

<div class="main-content">
    <div class="page-content">
        <h1>Criar Produto</h1>

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


        <form action="{{ route('criar-produto-post') }}" method="POST" class="col-md-12" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome') }}">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="descricao">Descrição</label>
                        <input type="text" class="form-control" id="descricao" name="descricao" value="{{ old('descricao') }}">
                    </div>
                </div>

                <div class="col-md-3">
                  <div class="form-group">
                    <label for="preco">Preço</label>
                    <input type="text" class="form-control" id="preco" name="preco" value="{{ old('preco') }}" oninput="validarPreco(this)">
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="form-group">
                    <label for="marca">Marca</label>
                    <input type="text" class="form-control" id="marca" name="marca" value="{{ old('marca') }}">
                  </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                    <label for="categoria">Categoria</label>
                    <select id="categoria" class="form-control" name="categoria">
                        @foreach ($categorias as $categoria)
                            <option value="{{ $categoria->nome_categoria }}">{{ $categoria->nome_categoria }}</option>
                        @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                    <label for="categoria">Subcategoria</label>
                    <select id="categoria" class="form-control" name="subcategoria">
                        @foreach ($subcategorias as $subcategoria)
                            <option value="{{ $subcategoria->nome_subcategoria }}">{{ $subcategoria->nome_subcategoria }}</option>
                        @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                      <label for="estoque">Estoque</label>
                      <input type="text" class="form-control" id="estoque" name="estoque" value="{{ old('estoque') }}">
                    </div>
                </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="tamanho">Tamanho</label>
                      <input type="text" class="form-control" id="tamanho" name="tamanho" value="{{ old('tamanho') }}">
                    </div>
                </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="cor">Cor</label>
                      <input type="text" class="form-control" id="cor" name="cor" value="{{ old('cor') }}">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                      <label for="imagem">Imagem</label>
                      <input type="file" class="form-control" id="imagem" name="imagem">
                    </div>
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

<script>
function formatarMoedaBrasileira(input) {
  let value = input.value;

  // Remover caracteres inválidos (não numéricos)
  value = value.replace(/\D/g, '');

  // Formatar em moeda brasileira
  value = (value / 100).toLocaleString('pt-BR', {
    style: 'currency',
    currency: 'BRL',
    minimumFractionDigits: 2,
    maximumFractionDigits: 2,
  });

  input.value = value;
}

function validarPreco(input) {
  let value = input.value;

  // Remover formatação
  value = value.replace(/[^\d,.]/g, '');

  // Substituir vírgulas por pontos
  value = value.replace(',', '.');

  // Verificar se possui mais de duas casas decimais
  let decimalCount = (value.split('.')[1] || '').length;


  // Atualizar valor formatado
  formatarMoedaBrasileira(input);
}

</script>
