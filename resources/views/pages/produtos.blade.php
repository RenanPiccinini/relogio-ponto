@extends('layouts.admin')

@section('content')

<div class="main-content">

    <div class="page-content">
        <h1>Lista dos Produtos</h1>

        @if(session('message'))
            <div class="alert alert-success col-md-3" id="alert" role="alert">
                {{ session('message') }}
            </div>
        @endif

        <div class="container float-start">
            <div class="row">
              <div class="col-md-12">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">Nome</th>
                      <th scope="col">Descrição</th>
                      <th scope="col">Preço</th>
                      <th scope="col">Marca</th>
                      <th scope="col">Categoria</th>
                      <th scope="col">Subcategoria</th>
                      <th scope="col">Estoque</th>
                      <th scope="col">Tamanho</th>
                      <th scope="col">Cor</th>
                      <th scope="col">Imagem</th>
                      <th scope="col">Editar</th>
                      <th scope="col">Excluir</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($produtos as $produto)
                      <tr>
                        <td>{{ $produto->nome }}</td>
                        <td>{{ $produto->descricao }}</td>
                        <td>{{ $produto->preco }}</td>
                        <td>{{ $produto->marca }}</td>
                        <td>{{ $produto->categoria }}</td>
                        <td>{{ $produto->subcategoria }}</td>
                        <td>{{ $produto->estoque }}</td>
                        <td>{{ $produto->tamanho }}</td>
                        <td>{{ $produto->cor }}</td>
                        <td>
                            <img src="{{ env('APP_URL') }}/storage/imagens-produtos/{{ $produto->imagem }}" alt="" width="50px">
                        </td>

                        <td>
                            <a class="btn btn-primary" href="{{ route('editar-produto', $produto->id) }}">
                                Editar
                            </a>
                        </td>
                        <td>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal{{ $produto->id }}">
                                Deletar
                            </button>
                        </td>
                      </tr>

                    <!-- Modal de confirmação -->
                    <div class="modal fade" id="confirmDeleteModal{{ $produto->id }}" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="confirmDeleteModalLabel">Confirmação de Exclusão</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Você tem certeza que deseja deletar o produto?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                    <form action="{{ route('deletar-produto', $produto->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Deletar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            <a href="{{ route('criar-produto') }}" class="btn btn-success">Criar produto</a>
          </div>
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
