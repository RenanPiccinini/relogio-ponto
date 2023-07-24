@extends('layouts.admin')

@section('content')

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="container">
                <h2>Meses</h2>
                @foreach ($meses as $mes => $registros)
                    <div class="col-md-6 col-xl-4">
                        <div class="card text-center">
                            <div class="mb-2 card-body text-muted">
                                <h3>{{ $mes }}</h3>
                                {{-- <a href="{{ route('gerar-pdf-mes', str_replace('/', '-', $mes)) }}" class="btn btn-info btn-sm mb-2">Salvar PDF</a> --}}
                                @php
                                    $totalSegundos = 0;
                                @endphp

                                @foreach ($registros as $registro)
                                    <li>{{ date('d/m/Y', strtotime($registro->data_calendario)) }} -
                                        {{ $registro->horario1 }} -
                                        {{ $registro->horario2 }}
                                        <span class="{{ ($diffInSeconds = strtotime($registro->horario2) - strtotime($registro->horario1) - 21600) < 0 ? 'text-danger' : 'text-success' }}">
                                            {{ ($diffInSeconds < 0 ? '' : '') . gmdate('H:i', abs($diffInSeconds)) }}
                                        </span>
                                    </li>

                                    {{-- Somar a diferença em segundos ao total --}}
                                    @php
                                        $totalSegundos += $diffInSeconds;
                                    @endphp
                                @endforeach

                                {{-- Exibir o total do mês em negrito e com a cor correta --}}
                                <strong class="{{ $totalSegundos < 0 ? 'text-danger' : 'text-success' }}">Total do mês: {{ gmdate('H:i', abs($totalSegundos)) }}</strong>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>


@endsection

