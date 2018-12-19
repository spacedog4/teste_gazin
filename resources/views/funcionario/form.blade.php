<div class="box">
    <form method="POST" action="{{ $funcionario->id ? route('funcionarios.edit', $funcionario->id) : route('funcionarios.create') }}">
        <h2 class="page-title">Adicionar Funcionário</h2>

        <div class="error-message"></div>

        <div class="form-group input-nome">
            <label for="inputNome">Nome</label>
            <input id="inputNome" value="{{ $funcionario->nome }}" type="text" placeholder="Informe o nome do funcionário" name="nome"/>
        </div>

        <div class="form-group input-idade">
            <label for="inputIdade">Idade</label>
            <input id="inputIdade" type="number" min="0" name="idade" value="{{ $funcionario->idade }}">
        </div>

        <div class="form-group input-sexo">
            <label for="inputSexo">Sexo</label>
            <select id="inputSexo" name="sexo">
                @foreach(config('app.sexos') as $value => $label)
                    <option {{ $value == $funcionario->sexo ? 'selected' : '' }} value="{{ $value }}">{{ $label }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group input-tipo">
            <label for="inputTipo">Tipo</label>
            <select id="inputTipo" name="tipo">
                <option value="">Selecionar</option>
                @foreach(config('app.tipos') as $value => $label)
                    <option {{ $value == $funcionario->tipo ? 'selected' : '' }} value="{{ $value }}">{{ $label }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group input-linguagem" style="display: none">
            <label for="inputLinguagem">Linguagem</label>
            <select id="inputLinguagem" name="linguagem">
                <option value="">Selecione</option>
                @foreach(config('app.linguagens') as $value => $label)
                    <option {{ $value == $funcionario->linguagem ? 'selected' : '' }} value="{{ $value }}">{{ $label }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group input-projeto" style="display: none">
            <label for="inputProjeto">Projeto</label>
            <select id="inputProjeto" name="projeto">
                <option value="">Selecione</option>
                @foreach(config('app.projetos') as $value => $label)
                    <option {{ $value == $funcionario->projeto ? 'selected' : '' }} value="{{ $value }}">{{ $label }}</option>
                @endforeach
            </select>
        </div>

    </form>
    <div class="action-buttons">
        <a class="cancel" href="javascript:void(0)">Cancelar</a>
        @if($funcionario->id)
            <a class="confirm" href="javascript:void(0)">Atualizar</a>
        @else
            <a class="confirm" href="javascript:void(0)">Adicionar</a>
        @endif
    </div>
</div>