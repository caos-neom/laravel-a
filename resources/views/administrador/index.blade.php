<div>
    <!-- The best way to take care of the future is to take care of the present moment. - Thich Nhat Hanh -->
    <form action="{{ route('administrador.add') }}" method="post">
    <input type="text" name="nome" id="nome" value="{{ old('nome') }}">
    <input type="text" name="nome" id="email" value="{{ old('email') }}">
    <input type="text" name="nome" id="telefone" value="{{ old('telefone') }}">
    <input type="text" name="nome" id="cpf" value="{{ old('cpf') }}">
    <input type="text" name="nome" id="usuario" value="{{ old('usuario') }}">
    <input type="text" name="nome" id="senha" value="{{ old('senha') }}">
    <input type="text" name="nome" id="status" value="{{ old('status') }}">
        @csrf
        
        <button type="submit">Salvar</button>
        @isset($success)
            <h1>{{ $success }}</h1>
        @endisset
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </form>


    <table border="1">
        <tr>
            <td>nome</td>
            <td>email</td>
            <td >telefone</td>
            <td>cpf</td>
            <td>usuario</td>
            <td>senha</td>
            <td>status</td>
            <td colspan="2">Ações</td>
        </tr>
        @isset($administradores)
        @foreach($administradores      as $administrador)
                    <tr>
                        <td>
                            <h3>{{ $administrador->nome }}</h3>
                        </td>
                        <td>
                            <h3>{{ $administrador->email }}</h3>
                        </td>
                        <td>
                            <h3>{{ $administrador->telefone }}</h3>
                        </td>
                        <td>
                            <h3>{{ $administrador->cpf }}</h3>
                        </td>
                        <td>
                            <h3>{{ $administrador->usuario }}</h3>
                        </td>
                        <td>
                            <h3>{{ $administrador->senha }}</h3>
                        </td>
                        <td>
                            <h3>{{ $administrador->status }}</h3>
                        </td>
                        <td>
                        <form action="{{ route('administrador.remove', ['id' => $administrador->id]) }}" method="GET">
                                <button type="submit">Remover</button>
                            </form>
                        </td>
                        <td>
                        <form action="{{ route('administrador.atualizar', ['id' => $administrador->id]) }}" method="GET">
                                <button type="submit">Atualizar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
        @endisset
    </table>

</div>
