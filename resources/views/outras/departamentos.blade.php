@extends('layouts.principal')
@section('conteudo')
@section('titulo', 'Departamentos')

<h3>Departamentos</h3>

<ul>
    <li>Computadores</li>
    <li>Eletrônicos</li>
    <li>Acessórios</li>
    <li>Roupas</li>
</ul>

@alerta (['tipo'=>'warning','titulo'=>'Erro Fatal'])
<p><strong>Erro inesperado</strong></p>
<p>Ocorreu um erro inesperado.</p>
@endalerta

@alerta (['tipo'=>'info','titulo'=>'Erro Fatal'])
<p><strong>Erro inesperado</strong></p>
<p>Ocorreu um erro inesperado.</p>
@endalerta

@alerta (['tipo'=>'success','titulo'=>'Erro Fatal'])
<p><strong>Erro inesperado</strong></p>
<p>Ocorreu um erro inesperado.</p>
@endalerta

@alerta (['tipo'=>'error','titulo'=>'Erro Fatal'])
<p><strong>Erro inesperado</strong></p>
<p>Ocorreu um erro inesperado.</p>
@endalerta

@endsection