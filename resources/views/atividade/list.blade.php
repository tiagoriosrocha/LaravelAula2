@extends('layouts.app')

@section('content')
<h1>Lista de Atividades</h1>

  <!-- EXIBE MENSAGENS DE SUCESSO -->
  @if(\Session::has('success'))
	<div class="container">
  		<div class="alert alert-success">
    		{{\Session::get('success')}}
  		</div>
  	</div>
  @endif

  <!-- EXIBE MENSAGENS DE ERROS -->
  @if ($errors->any())
  <div class="container">
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  </div>
  @endif

<div class="container">
@foreach($atividades as $atividade)
  <div class="row">
	   <p class="h3"><a href="/atividades/{{$atividade->id}}">{{$atividade->title}}</a></p>
     <p class="h5">Descrição: <b>{{$atividade->description}}</b></p>
     <p class="h5">Agendado para: <b>{{\Carbon\Carbon::parse($atividade->scheduledto)->format('d/m/Y h:m')}}</b></p>

      @auth
        <p class="h5">Ações: 
          <a href="/atividades/{{$atividade->id}}">Ver Mais</a>
          <a href="/atividades/{{$atividade->id}}/edit">Editar</a> 
          <a href="/atividades/{{$atividade->id}}/delete">Deletar</a>
        </p>
      @endauth
  </div>
  <br>
@endforeach
</div>


@auth
<div class="container">
  <div class="row">
  <p><a href="/atividades/create">Criar novo registro</a></p>
</div>
</div>
@endauth

@endsection
