<div>
    <!-- It is not the man who has too little, but the man who craves more, that is poor. - Seneca -->
    <form action="{{ route('aluno.add') }}" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">

        <button type="submit">Salvar</button>
        @isset($success)
            <h1>{{ $success }}</h1>
        @endisset
    </form>

    @isset($alunos)
            @foreach($alunos as $aluno)
                <h3>{{ $aluno->nome }}</h3>
            @endforeach
    @endisset
</div>
