<?php

namespace App\Http\Controllers;

use App\Http\Requests\FuncionarioRequest;
use App\Models\Horario;
use App\Models\Mes;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DateTime;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function admin()
    {
        // Define o locale para o idioma português
        setlocale(LC_TIME, 'pt_BR.utf8', 'pt_BR', 'Portuguese_Brazil');

        $id = Auth::user()->id;

        $horarios = Horario::where('user_id', $id)->get();
        //dd($horarios);
        $mesAtual = date('n'); // Obtém o mês atual em formato numérico
        $anoAtual = date('Y'); // Obtém o ano atual

        return view('dashboard.index', [
            'horarios' => $horarios,
            'mesAtual' => $mesAtual,
            'anoAtual' => $anoAtual,
        ]);
    }

    public function store(Request $request)
    {
        $horario1 = new DateTime($request->horario1);
        $horario2 = new DateTime($request->horario2);

        // Subtrai o segundo horário do primeiro horário
        $diferenca = $horario1->diff($horario2);

        // Verifica se a diferença é negativa
        $horas = $diferenca->format('%H:%I');

        // Calcula a diferença em segundos e subtrai 6 horas (21600 segundos)
        $diffInSeconds = strtotime($horas) - 21600;
        $diffTime = gmdate('H:i:s', abs($diffInSeconds));

        $mesAtual = date('n'); // Obtém o mês atual em formato numérico
        $anoAtual = date('Y'); // Obtém o ano atual

        $user = Auth::user();

        $tempo = new Horario;
        $tempo->user_id = $user->id;
        $tempo->horario1 = $request->horario1;
        $tempo->horario2 = $request->horario2;
        $tempo->tempo_total = $diffTime;
        $tempo->data_calendario = $request->data_calendario;
        $tempo->save();

        $data_calendario = $request->data_calendario;

        // Salva os horários e a diferença em um array
        $data = [
            'horario1' => $horario1->format('H:i'),
            'horario2' => $horario2->format('H:i'),
            'diferenca' => $diffTime,
            'data_calendario' => $data_calendario
        ];

        return redirect()->route('admin', [
            'data' => $data,
        ]);
    }

    public function mesesIndex()
    {
        $id = Auth::user()->id;

        $horarios = Mes::where('user_id', $id)->get();

        //$horarios = Mes::all();

        $meses = [];
        foreach ($horarios as $horario) {

            // Agrupar por mês
            $mes = Carbon::parse($horario->data_calendario)->format('m/Y');
            $meses[$mes][] = $horario;
        }

        return view('dashboard.meses', [
            'meses' => $meses
        ]);
    }

    public function fecharMes()
    {
        $userId = Auth::user()->id;

        // Obter os dados da tabela Horario
        $horarios = Horario::all();

        // Copiar os dados para a tabela Mes e agrupar por mês
        $meses = [];
        foreach ($horarios as $horario) {
            Mes::create([
                'horario1' => $horario->horario1,
                'user_id' => $userId,
                'horario2' => $horario->horario2,
                'tempo_total' => $horario->tempo_total,
                'data_calendario' => $horario->data_calendario
            ]);

            // Agrupar por mês
            $mes = Carbon::parse($horario->data_calendario)->format('m/Y');
            $meses[$mes][] = $horario;
        }

        Horario::truncate();

        return redirect()
            ->route('meses-index', [
                'meses' => $meses,
            ]);
    }

    public function gerarPDFMes($mes)
    {
        $registros = Mes::whereRaw("DATE_FORMAT(data_calendario, '%m/%Y') = ?", [$mes])->get();

        // Renderizar a view como HTML
        $pdfView = view('dashboard.pdf', ['registros' => $registros])->render();

        // Inicializar o objeto Dompdf
        $dompdf = new Dompdf();

        // Carregar o conteúdo HTML no Dompdf
        $dompdf->loadHtml($pdfView);

        // Definir o tamanho do papel e a orientação
        $dompdf->setPaper('A4', 'portrait');

        // Renderizar o PDF
        $dompdf->render();

        // Gerar o nome do arquivo PDF (por exemplo, "mes-janeiro-2023.pdf")
        $filename = 'mes-' . $mes . '.pdf';

        // Salvar o PDF no diretório storage/app/public/pdf
        $pdfPath = storage_path('app/public/pdf/' . $filename);
        $dompdf->output([ 'output_type' => 'file', 'output_file' => $pdfPath]);

        return redirect()->back()->with('message', 'PDF gerado com sucesso!');
    }

    public function funcionariosIndex()
    {
        $users = User::all();

        return view('dashboard.funcionarios', [
            'users' => $users
        ]);
    }

    public function funcionarioDetalhes($id)
    {
        $horarios = Mes::where('user_id', $id)->get();

        return view('dashboard.detalhes-funcionario', [
            'id' => $id,
            'horarios' => $horarios,
        ]);
    }

    public function adicionarFuncionario()
    {
        return view('dashboard.adicionar-funcionario');
    }

    public function adicionarFuncionarioPost(FuncionarioRequest $request)
    {
        $novo_funcionario = new User;
        $novo_funcionario->name = $request->name;
        $novo_funcionario->email = $request->email;
        $novo_funcionario->tipo = $request->tipo;
        $novo_funcionario->password = $request->password;
        $novo_funcionario->save();

        return redirect()->route('funcionarios')->with('message', 'Funcionário(a) cadastrado(a) com sucesso.');
    }

    public function editarFuncionario($id)
    {
        $user = User::find($id);

        return view('dashboard.editar-funcionario', [
            'user' => $user,
        ]);
    }

    public function editarFuncionarioPost(FuncionarioRequest $request)
    {
        $id = $request->input('id');

        $user = User::find($id);
        $user->name = $request->name;
        $user->email =$request->email;
        $user->password = Hash::make($request->password);
        $user->update();

        return redirect()->route('funcionarios')->with('message', 'Funcionário(a) Editado(a) com sucesso!');
    }


    public function excluirFuncionario($id)
    {
        $funcionario = User::find($id);

        $funcionario->delete();

        return redirect()->route('funcionarios')->with('message', 'Funcionário(a) Excluído(a) com sucesso!');
    }

}
