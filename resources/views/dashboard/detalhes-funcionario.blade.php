@extends('layouts.admin')

@section('content')

    <div class="main-content">
        <div class="page-content">

            <div class="container-fluid">

                <div class="container">
                    <h2>Horários</h2>

                    <form>
                        <div class="col-md-3">
                            <input type="text" class="form-control" id="search" placeholder="Pesquisar...">
                        </div>
                    </form>

                    @if(session('message'))
                    <div class="alert alert-success col-md-3" id="alert" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif

                    <table class="table table-bordered" id="horarios-table">
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        $('#search').on('keyup', function() {
            var searchTerm = $(this).val().toLowerCase();
            $('#horarios-table tbody tr').each(function() {
                var rowText = $(this).text().toLowerCase();
                $(this).toggle(rowText.indexOf(searchTerm) > -1);
            });
        });
    });
    </script>


