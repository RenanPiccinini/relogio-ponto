@extends('layouts.admin')

@section('content')

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="container">
                <h2>Adicionar Funcionário</h2>

                    @if(session('message'))
                        <div class="alert alert-success col-md-3" id="alert" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif

                    @if($errors->any()) {{-- método any retorna true se tiver errors, é false por default --}}
                        <div class="alert alert-danger rounded-3 col-md-4" id="alert" role="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                                </ul>
                        </div>
                    @endif


                    <div class="col-md-6 col-xl-4">
                        <div class="card">
                            <div class="card-body">

                                <form action="{{ route('adicionar-funcionario-post') }}" method="POST">
                                    @csrf

                                    <div class="form-group">
                                        <label for="name" class="mt-2">Nome:</label>
                                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="email" class="mt-2">E-mail:</label>
                                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="tipo" class="mt-2">Tipo:</label>
                                        <select class="form-control" id="tipo" name="tipo">
                                            <option disabled selected>Selecione...</option>
                                            <option value="Admin">Admin</option>
                                            <option value="Colaborador">Colaborador</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="password" class="mt-2">Senha</label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>

                                    <div class="form-group" class="mt-2">
                                        <label for="password-confirm">Repita a senha</label>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>

                                    <button type="submit" class="btn btn-primary mt-3">Adicionar Funcionário</button>
                                </form>

                            </div>

                        </div>
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
