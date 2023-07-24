<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Mês</title>
</head>
<body>
    @if (count($registros) > 0)
        <h2>Mês de {{ $registros[0]->data_calendario->format('F Y') }}</h2>
        <ul>
            @foreach ($registros as $registro)
                <li>{{ $registro->data_calendario->format('d/m/Y') }} - {{ $registro->horario1 }} - {{ $registro->horario2 }}
                    <span class="{{ ($diffInSeconds = strtotime($registro->horario2) - strtotime($registro->horario1) - 21600) < 0 ? 'text-danger' : 'text-success' }}">
                        {{ ($diffInSeconds < 0 ? '-' : '') . gmdate('H:i', abs($diffInSeconds)) }}
                    </span>
                </li>
            @endforeach
        </ul>
    @else
        <p>Nenhum registro encontrado para o mês selecionado.</p>
    @endif
</body>
</html>
