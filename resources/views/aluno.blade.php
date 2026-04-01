<!-- <div>
    Waste no more time arguing what a good man should be, be one. - Marcus Aurelius 
</div> -->
@foreach($alunos as $aluno)
<h3>{{$aluno->nome}}</h3>
<h3>{{$aluno->telefone}}</h3>
<h3>{{$aluno->email}}</h3>

@endforeach


<!-- laravel blade -->