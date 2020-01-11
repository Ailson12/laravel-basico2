@extends('layouts.master')
@section('titulo', 'formulario')
@section('conteudo')
<form method="POST">
    @csrf 
    @if(isset($cliente))
    @method('PUT')
    @endif
  <div class="form-group">
    <label for="exampleInputEmail1">Nome</label>
    <input type="text" class="form-control" name="nome" value="{{ $cliente->nome ?? null}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">CPF</label>
    <input type="text" class="form-control" name="cpf" value="{{ $cliente->cpf ?? null}}" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Data de Nascimento</label>
    <input type="date" class="form-control" name="data_nascimento" value="{{ $cliente->data_nascimento ?? null}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Telefone</label>
    <input type="text" class="form-control" name="telefone" value="{{$cliente->telefone ?? null}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="email" class="form-control" name="email" value="{{$cliente->email ?? null}}">
  </div>
  <button type="submit" class="btn btn-primary">Salvar</button>
</form>
@if(isset($cliente))
<form action="/clientes/{{$cliente->id}}" method="POST">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger" type="submit">Excluir</button>
</form>
@endif
@endsection