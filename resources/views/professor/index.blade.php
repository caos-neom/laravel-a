<div>
    <!-- The best way to take care of the future is to take care of the present moment. - Thich Nhat Hanh -->
    <form action="{{ route('professor.add') }}" method="post">
    <input type="text" name="nome" id="nome" value="{{ old('nome') }}">
    <input type="text" name="nome" id="email" value="{{ old('email') }}">
    <input type="text" name="nome" id="telefone" value="{{ old('telefone') }}">
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
            <td colspan="2">Ações</td>
        </tr>
        @isset($professores)
        @foreach($professores as $professor)
                    <tr>
                        <td>
                            <h3>{{ $professor->nome }}</h3>
                        </td>
                        <td>
                            <h3>{{ $professor->email }}</h3>
                        </td>
                        <td>
                            <h3>{{ $professor->telefone }}</h3>
                        </td>
                        <td>
                        <form action="{{ route('professor.remove', ['id' => $professor->id]) }}" method="GET">
                                <button type="submit">Remover</button>
                            </form>
                        </td>
                        <td>
                        <form action="{{ route('professor.atualizar', ['id' => $professor->id]) }}" method="GET">
                                <button type="submit">Atualizar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
        @endisset
    </table>

</div>
