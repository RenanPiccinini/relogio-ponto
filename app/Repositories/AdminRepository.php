<?php

namespace App\Repositories;

use App\Http\Requests\FuncionarioRequest;
use App\Models\Admin;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Horario;
use Illuminate\Support\Facades\DB;
use App\Models\Mes;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class AdminRepository
{
    public function admin()
    {
        return DB::transaction(function () {

            $id = Auth::user()->id;

            $horarios = Horario::where('user_id', $id)->get();

            return $horarios;
        });
    }

    public function store(Request $request)
    {
        return DB::transaction(function () use ($request){
            $horario1 = new DateTime($request->horario1);
            $horario2 = new DateTime($request->horario2);

            // Subtrai o segundo horário do primeiro horário
            $diferenca = $horario1->diff($horario2);

            // Verifica se a diferença é negativa
            $horas = $diferenca->format('%H:%I');

            // Calcula a diferença em segundos e subtrai 6 horas (21600 segundos)
            $diffInSeconds = strtotime($horas) - 21600;
            $diffTime = gmdate('H:i:s', abs($diffInSeconds));

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

            return $data;
        });
    }

    public function mesesIndex()
    {
        return DB::transaction(function (){
            $id = Auth::user()->id;

            $horarios = Mes::where('user_id', $id)->get();

            //$horarios = Mes::all();

            $meses = [];

            foreach ($horarios as $horario) {

                // Agrupar por mês
                $mes = Carbon::parse($horario->data_calendario)->format('m/Y');
                $meses[$mes][] = $horario;
            }

            return $meses;
        });
    }

    public function fecharMes()
    {
        try{
            DB::beginTransaction();

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

            return $meses;

        } catch (\Exception $e) {
            DB::rollback(); // Desfaz a transação em caso de erro
            throw $e; // Você pode lançar a exceção para cima para lidar com ela no controlador
        }
    }

    public function funcionarioDetalhes($id)
    {
        return DB::transaction(function () use ($id) {
            $horarios = Mes::where('user_id', $id)->get();

            return $horarios;
        });
    }

    public function adicionarFuncionarioPost(FuncionarioRequest $request)
    {
        return DB::transaction(function () use ($request) {
            $novo_funcionario = User::create([
                                    'name' => $request->name,
                                    'email' => $request->email,
                                    'tipo' => $request->tipo,
                                    'password' => $request->password
                                ]);

            return $novo_funcionario;
        });
    }

    public function editarFuncionario($id)
    {
        return DB::transaction(function () use ($id){
            $user = User::find($id);

            return $user;
        });
    }

    public function editarFuncionarioPost(FuncionarioRequest $request)
    {
        return DB::transaction(function () use ($request){
            $id = $request->input('id');

            $user = User::find($id);
            $user->name = $request->name;
            $user->email =$request->email;
            $user->tipo =$request->tipo;
            $user->password = Hash::make($request->password);
            $user->update();

            return $user;
        });
    }

    public function excluirFuncionario($id)
    {
        return DB::transaction(function () use ($id){
            $funcionario = User::find($id);

            $funcionario->delete();
        });

    }

}
