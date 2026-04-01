<div>
    <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
    @foreach($professores as $professor)
<h3>{{$professor->nome}}</h3>
<h3>{{$professor>cpf}}</h3>


@endforeach
</div>
