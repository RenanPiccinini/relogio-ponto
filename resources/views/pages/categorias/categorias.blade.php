@extends('layouts.admin')

@section('content')

    <div class="main-content">
        <div class="page-content">
            <h1>Lista das Categorias</h1>

            @if(session('message'))
                <div class="alert alert-success col-md-3" id="alert" role="alert">
                    {{ session('message') }}
                </div>
            @endif

            <div class="container float-start">
                <div class="row">
                  <div class="col-md-4">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">Nome das Categorias</th>
                          <th scope="col">Editar</th>
                          <th scope="col">Excluir</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($categorias as $categoria)
                          <tr>
                            <td>{{ $categoria->nome_categoria }}</td>
                            <td>
                                <a class="btn btn-primary" href="{{ route('editar-categoria', $categoria->id) }}">
                                    Editar
                                </a>
                            </td>
                            <td>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal{{ $categoria->id }}">
                                    Deletar
                                </button>
                            </td>
                          </tr>

                        <!-- Modal de confirmação -->
                        <div class="modal fade" id="confirmDeleteModal{{ $categoria->id }}" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="confirmDeleteModalLabel">Confirmação de Exclusão</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Você tem certeza que deseja deletar a Categoria?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                        <form action="{{ route('deletar-categoria', $categoria->id) }}" method="POST" class="d-inline">
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
              </div>

            <a href="{{ route('criar-categoria') }}" class="btn btn-success">Criar categoria</a>
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
