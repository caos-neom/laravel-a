<div>
    <!-- The best way to take care of the future is to take care of the present moment. - Thich Nhat Hanh -->
    <form action="{{ route('componente.add') }}" method="post">
    <input type="text" name="nome" id="nome" value="{{ old('nome') }}">
    <input type="text" name="nome" id="hora_inicio" value="{{ old('hora_inicio') }}">
    <input type="text" name="nome" id="hora_fim" value="{{ old('hora_fim') }}">
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
            <td>hora_inicio</td>
            <td >hora_fim</td>
            <td colspan="2">Ações</td>
        </tr>
        @isset($componentes)
        @foreach($componentes as $componente)
                    <tr>
                        <td>
                            <h3>{{ $componente->nome }}</h3>
                        </td>
                        <td>
                            <h3>{{ $componente->hora_inicio }}</h3>
                        </td>
                        <td>
                            <h3>{{ $componente->hora_fim }}</h3>
                        </td>
                        <td>
                        <form action="{{ route('componente.remove', ['id' => $componente->id]) }}" method="GET">
                                <button type="submit">Remover</button>
                            </form>
                        </td>
                        <td>
                        <form action="{{ route('componente.atualizar', ['id' => $componente->id]) }}" method="GET">
                                <button type="submit">Atualizar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
        @endisset
    </table>

</div>
