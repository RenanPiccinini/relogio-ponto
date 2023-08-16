<?php

namespace App\Http\Controllers;

use App\Http\Requests\FuncionarioRequest;
use App\Models\User;
use App\Repositories\AdminRepository;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct(private AdminRepository $repository)
    {

    }

    public function admin()
    {
        setlocale(LC_TIME, 'pt_BR.utf8', 'pt_BR', 'Portuguese_Brazil');

        $horarios = $this->repository->admin();

        return view('dashboard.index', [
            'horarios' => $horarios,
        ]);
    }

    public function store(Request $request)
    {
        $data = $this->repository->store($request);

        return redirect()->route('admin', [
            'data' => $data,
        ]);
    }

    public function mesesIndex()
    {
        $meses = $this->repository->mesesIndex();

        return view('dashboard.meses', [
            'meses' => $meses
        ]);
    }

    public function fecharMes()
    {
        $meses = $this->repository->fecharMes();

        return redirect()
            ->route('meses-index', [
                'meses' => $meses,
            ]);
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
        $horarios = $this->repository->funcionarioDetalhes($id);

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
        $novo_funcionario = $this->repository->adicionarFuncionarioPost($request);

        return redirect()->route('funcionarios')->with('message', 'Funcionário(a) cadastrado(a) com sucesso.');
    }

    public function editarFuncionario($id)
    {
        $user = $this->repository->editarFuncionario($id);

        return view('dashboard.editar-funcionario', [
            'user' => $user,
        ]);
    }

    public function editarFuncionarioPost(FuncionarioRequest $request)
    {
        $user = $this->repository->editarFuncionarioPost($request);

        return redirect()->route('funcionarios')->with('message', 'Funcionário(a) Editado(a) com sucesso!');
    }


    public function excluirFuncionario($id)
    {
        $funcionario = $this->repository->excluirFuncionario($id);

        return redirect()->route('funcionarios')->with('message', 'Funcionário(a) Excluído(a) com sucesso!');
    }
}
