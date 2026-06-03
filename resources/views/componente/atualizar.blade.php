<div>
    <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
    <div>
    <form action="{{ route('componente.save') }}" method="post">
        @csrf

        <input type="hidden" name="id" value="{{ $componente->id }}">

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" value="{{ $componente->nome }}">

        <label for="hora_inicio">hora_inicio</label>
        <input type="text" name="hora_inicio" id="hora_inicio" value="{{ $componente->hora_inicio }}">

        <label for="hora_final">hora_final</label>
        <input type="text" name="hora_final" id="hora_final" value="{{ $componente->hora_final }}">

        <button type="submit">Salvar</button>
        @isset($success)
            <h1>{{ $success }}</h1>
        @endisset
    </form>
</div>

</div>
