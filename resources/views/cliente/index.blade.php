
    @extends('layouts.master')
        @section('titulo', 'clientes')
        @section('conteudo')
<a class="btn btn-primary" href="/clientes/create">Cadastrar Novo</a>
<br><br>
    @foreach($clientes as $c)
    Nome:{{$c->nome}} - Telefone:{{$c->telefone}}
    <a href="/clientes/edit/{{$c->id}}">Editar</a>
    <hr>
    @endforeach
@endsection 