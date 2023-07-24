@extends('layouts.admin')

@section('content')

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="container">
                <h2>Funcionários </h2>
                <a href="{{ route('adicionar-funcionario') }}" class="btn btn-success mb-3">Adicionar Funcionário</a>

                    @if(session('message'))
                        <div class="alert alert-success col-md-3" id="alert" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="alert alert-danger rounded-3 col-md-4" id="alert" role="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                                </ul>
                        </div>
                    @endif

                    <div class="col-md-12">
                        <table class="table table-bordered ">
                            <thead>
                                <tr class="text-center">
                                    <th>Nome</th>
                                    <th>E-mail</th>
                                    <th>Ver horários</th>
                                    <th>Editar</th>
                                    <th>Excluir</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <a class="btn btn-secondary" href="{{ route('funcionario-detalhes', $user->id) }}">Ver horários</a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <a class="btn btn-warning" href="{{ route('editar-funcionario', $user->id)}}">Editar</a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <form action="{{ route('excluir-funcionario', $user->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir este funcionário?')">Excluir</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
            </div>
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
