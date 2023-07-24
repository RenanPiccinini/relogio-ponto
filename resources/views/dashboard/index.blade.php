@extends('layouts.admin')

@section('content')

    <div class="main-content">
        <div class="page-content">

            <div class="container-fluid">

                <div class="container">
                    <h2>Horários</h2>
                    <form action="{{ route('horarios.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="data_calendario">Data:</label>
                            <input type="date" class="form-control" id="data_calendario" name="data_calendario">
                        </div>
                        <div class="form-group">
                            <label for="horario1">Horário de entrada:</label>
                            <input type="time" class="form-control" id="horario1" name="horario1">
                        </div>
                        <div class="form-group">
                            <label for="horario2">Horário de saída:</label>
                            <input type="time" class="form-control" id="horario2" name="horario2">
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Adicionar Horários</button>
                    </form>
                    <br>

                    @if(session('message'))
                    <div class="alert alert-success col-md-3" id="alert" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Data</th>
                                <th>Horário de entrada</th>
                                <th>Horário de saída</th>
                                <th>Total do dia</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($horarios as $horario)
                            <tr>
                                <td>{{ strftime('%d/%m/%Y', strtotime($horario->data_calendario)) }}</td>
                                <td>{{ $horario->horario1 }}</td>
                                <td>{{ $horario->horario2 }}</td>
                                <td class="{{ ($diffInSeconds = strtotime($horario->horario2) - strtotime($horario->horario1) - 21600) < 0 ? 'text-danger' : 'text-success' }}">
                                    {{ ($diffInSeconds < 0 ? '-' : '') . gmdate('H:i', abs($diffInSeconds)) }}
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>

                <form action="{{ route('fechar-mes') }}" style="margin-left: 257px" method="POST">
                    @csrf
                    <button class="btn btn-success">Fechar mês</button>
                </form>

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
