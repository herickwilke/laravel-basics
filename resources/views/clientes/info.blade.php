@extends('layouts.principal')
@section('conteudo')
@section('titulo', 'Detalhes do cliente')

<h3>Informações do cliente:</h3>

<p>ID: {{$cliente['id']}}</p>
<p>Nome: {{$cliente['nome']}}</p>

<br>

<a href="{{route('clientes.index')}}">Voltar</a>

@endsection