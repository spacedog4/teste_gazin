<table class="list-records">
    <thead>
    <th>Nome</th>
    <th>Sexo</th>
    <th>Idade</th>
    <th>Linguagem/Projeto</th>
    <th></th>
    </thead>
    <tbody>
    @foreach($funcionarios as $funcionario)
        <tr>
            <td>{{$funcionario->nome}}</td>
            <td>{{$funcionario->sexo}}</td>
            <td>{{$funcionario->idade}}</td>
            @if($funcionario->tipo == 'P')
                <td>{{$funcionario->linguagem}}</td>
            @elseif($funcionario->tipo == 'A')
                <td>{{$funcionario->projeto}}</td>
            @endif
            <td class="actions">
                <a href="javascript:editFuncionario({{$funcionario->id}})" class="edit"><i class="icon-pencil"></i></a>
                <a href="javascript:removeFuncionario({{$funcionario->id}})" class="remove"><i class="icon-trash"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>