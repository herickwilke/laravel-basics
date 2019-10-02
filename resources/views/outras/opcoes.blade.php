@extends('layouts.principal')
@section('titulo', 'Opções')
@section('conteudo')

<div class="options">
    <ul>
        <li> <a class="{{request()->RouteIs('opcoes') && ($opcao == 1) ? 'warning selected' : 'warning'}}" href="{{route('opcoes',1)}}">warning</a> </li>
        <li> <a class="{{request()->RouteIs('opcoes') && ($opcao == 2) ? 'success selected' : 'success'}}"  href="{{route('opcoes',2)}}">success</a> </li>
        <li> <a class="{{request()->RouteIs('opcoes') && ($opcao == 3) ? 'info selected' : 'info'}}"     href="{{route('opcoes',3)}}">info</a> </li>
        <li> <a class="{{request()->RouteIs('opcoes') && ($opcao == 4) ? 'error selected' : 'error'}}"    href="{{route('opcoes',4)}}">error</a> </li>
    </ul>
</div>

@if(isset($opcao))

@switch($opcao)
@case(1)
@alerta (['tipo'=>'warning','titulo'=>'Erro Fatal'])
<p><strong>Warning</strong></p>
<p>Ocorreu um erro inesperado.</p>
@endalerta
@break
@case(2)
@alerta (['tipo'=>'success','titulo'=>'Erro Fatal'])
<p><strong>Success</strong></p>
<p>Ocorreu um erro inesperado.</p>
@endalerta
@break
@case(3)
@alerta (['tipo'=>'info','titulo'=>'Erro Fatal'])
<p><strong>Info</strong></p>
<p>Ocorreu um erro inesperado.</p>
@endalerta
@break
@case(4)
@alerta (['tipo'=>'error','titulo'=>'Erro Fatal'])
<p><strong>Error</strong></p>
<p>Ocorreu um erro inesperado.</p>
@endalerta
@break
@endswitch

@endif

@endsection


