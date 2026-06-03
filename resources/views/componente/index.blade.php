<div>
    <!-- The best way to take care of the future is to take care of the present moment. - Thich Nhat Hanh -->
    <form action="{{ route('componente.add') }}" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">

        <label for="hora_inicio">hora_inicio</label>
        <input type="text" name="hora_inicio" id="hora_inicio">

        <label for="hora_fim">hora_fim</label>
        <input type="text" name="hora_fim" id="hora_fim">


        <button type="submit">Salvar</button>
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
