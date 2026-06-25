<div>
    <!-- Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may fear less. - Marie Curie -->

    <form action="{{ route('curso.add') }}" method="post">
    <input type="text" name="nome" id="nome" value="{{ old('nome') }}">
    <input type="text" name="nome" id="periodo" value="{{ old('periodo') }}">
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
    </form>


    <table border="1">
        <tr>
            <td>Nome do Curso</td>
            <td>Periodo</td>
            <td colspan="2">Ações</td>
        </tr>
        @isset($cursos)
        @foreach($cursos as $curso)
                    <tr>
                        <td>
                        <h3>{{ $curso->nome }}</h3>
                        </td>
                        <td>
                        <h3>{{ $curso->periodo }}</h3>
                        </td>
                        <td>
                        <form action="{{ route('curso.remove', ['id' => $curso->id]) }}" method="GET">
                                <button type="submit">Remover</button>
                            </form>
                        </td>               
                        <td>
                        <form action="{{ route('curso.atualizar', ['id' => $curso->id]) }}" method="GET">
                                <button type="submit">Atualizar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
        @endisset
    </table>
</div>
