<div>
    <!-- Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may fear less. - Marie Curie -->

    <form action="{{ route('curso.add') }}" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">

        <label for="periodo">Periodo</label>
        <input type="text" name="periodo" id="periodo">

        <button type="submit">Salvar</button>
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
                        <form action="{{ route('curso.remove', ['id' => $curso->id]) }}" method="GET">
                                <button type="submit">Remover</button>
                            </form>
                        <td>
                            <button>atualizar</button>
                        </td>
                    </tr>
                @endforeach
        @endisset
    </table>
</div>
