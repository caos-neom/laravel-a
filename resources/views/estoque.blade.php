<!-- <table border='1'> -->
    <tr>
        <th>id</th>
        <th>nome</th>
        <th>preco</th>
        <th>açoes</th>
    </tr>
    @foreach($produtos as $produto)
    <tr>
        <td>{{$produto['id']}}</td>
        <td>{{$produto['nome']}}</td>
        <td>{{$produto['preco']}}</td>
        <td>
            <button>remove</button>
            <button>editar</button>
        </td>
    </tr>
    @endforeach

</table>