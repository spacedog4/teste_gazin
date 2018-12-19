<?php

namespace App\Http\Controllers;

use App\Funcionario;
use App\Http\Requests\FuncionarioRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Validation\Rule;
use phpDocumentor\Reflection\Project;

class FuncionariosController extends Controller
{

    public function index()
    {
        return view('funcionario.index');
    }

    public function create()
    {
        $funcionario = new Funcionario();

        return view('funcionario.form', compact('funcionario'));
    }

    public function edit($id)
    {
        $funcionario = Funcionario::find($id);

        return view('funcionario.form', compact('funcionario'));
    }

    public function store(FuncionarioRequest $request)
    {
        Funcionario::create($request->validated());

        return Response::json('success', 200);
    }

    public function update(FuncionarioRequest $request, $id)
    {
        $funcionario = Funcionario::find($id);

        $funcionario->update($request->validated());

        return Response::json('success', 200);
    }

    public function remove($id)
    {
        $funcionario = Funcionario::find($id);

        $funcionario->delete();

        return Response::json('success', 200);
    }

    public function all(Request $request)
    {
        $query = Funcionario::latest()->where('nome', 'like', '%' . $request->nome . '%');

        if ($request->idade) {
            $query->where('idade', $request->idade);
        }

        if ($request->sexo) {
            $query->where('sexo', $request->sexo);
        }

        if ($request->tipo) {
            $query->where('tipo', $request->tipo);
        }

        if ($request->linguagem) {
            $query->where('linguagem', $request->linguagem);
        }

        if ($request->projeto) {
            $query->where('projeto', $request->projeto);
        }

        $funcionarios = $query->get();

        return view('funcionario.funcionarios', compact('funcionarios'));
    }
}
