<div>
    <!-- Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may fear less. - Marie Curie -->

    <form action="{{ route('curso.add') }}" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">

        <label for="nome">Periodo</label>
        <input type="text" name="nome" id="nome">

        <button type="submit">Salvar</button>
    </form>

</div>
