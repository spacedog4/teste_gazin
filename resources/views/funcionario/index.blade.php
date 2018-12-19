@extends('layouts.default')

@section('content')
    <h2 class="page-title">Funcionarios</h2>

    <div class="modal" id="AddFuncionario" style="display: none;"></div>

    <div id="filter">
        <form action="{{ route('funcionarios') }}" method="GET">
            <div class="form-group">
                <label>Nome</label>
                <input type="text" name="nome">
            </div>
            <div class="form-group">
                <label>Sexo</label>
                <select name="sexo">
                    <option value="">Todos</option>
                    @foreach(config('app.sexos') as $value => $label)
                        <option value="{{ $value }}">{{ $label }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Idade</label>
                <input type="number" min="0" max="100" name="idade">
            </div>
            <div class="form-group">
                <label>Tipo</label>
                <select name="tipo">
                    <option value="">Todos</option>
                    @foreach(config('app.tipos') as $value => $label)
                        <option value="{{ $value }}">{{ $label }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Linguagem</label>
                <select name="linguagem">
                    <option value="">Todas</option>
                    @foreach(config('app.linguagens') as $value => $label)
                        <option value="{{ $value }}">{{ $label }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Projeto</label>
                <select name="projeto">
                    <option value="">Todos</option>
                    @foreach(config('app.projetos') as $value => $label)
                        <option value="{{ $value }}">{{ $label }}</option>
                    @endforeach
                </select>
            </div>
        </form>
    </div>

    <div id="listAjax"></div>

    <a href="javascript:void(0)" id="add">Adicionar</a>
@endsection

