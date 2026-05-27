<div>
    <!-- The best way to take care of the future is to take care of the present moment. - Thich Nhat Hanh -->
    <form action="{{ route('professor.add') }}" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">

        <label for="email">Email</label>
        <input type="text" name="email" id="email">

        <label for="telefone">telefone</label>
        <input type="text" name="telefone" id="telefone">


        <button type="submit">Salvar</button>
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
                        <form action="{{ route('professor.remove', ['id' => $professor->id]) }}" method="GET">
                                <button type="submit">Remover</button>
                            </form>
                        <td>
                            <button>Remover</button>
                        </td>
                    </tr>
                @endforeach
        @endisset
    </table>

</div>
