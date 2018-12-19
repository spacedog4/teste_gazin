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

    public function all()
    {
        $funcionarios = Funcionario::latest()->get();

        return view('funcionario.funcionarios', compact('funcionarios'));
    }
}
