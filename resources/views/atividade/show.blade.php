@extends('layouts.app')

@section('content')

<div class="row">
<p class="h2">Atividade ID:{{$atividade->id}}</p>
</div>

<div class="row">
    <ul class="list-unstyled">
        <li><p class="h5">Título: <b>{{$atividade->title}}</b></p></li>
        <li><p class="h5">Agendado para: <b>{{\Carbon\Carbon::parse($atividade->scheduledto)->format('d/m/Y h:m')}}</b></p></li>
        <li><p class="h5">Descrição: <b>{{$atividade->description}}</b></p></li>
        <li>----</li>
        <li><p class="h5">Criada em: <b>{{\Carbon\Carbon::parse($atividade->created_at)->format('d/m/Y h:m')}}</b></p></li>
        <li><p class="h5">Atualizada em: <b>{{\Carbon\Carbon::parse($atividade->updated_at)->format('d/m/Y h:m')}}</b></p></li>
    </ul>
</div>

<br>
<br>

<div class="row">
<p class="h4">Mensagens Relacionadas:</p>
<table id="tabela" name="tabela"  class="table table-striped ">
    <thead>
       <tr>
            <td>Data</td>
            <td>Título</td>
            <td>Texto</td>
        </tr>
    </thead>
    <tbody>
        @foreach($atividade->mensagens as $msg)
	        <tr>
	            <td>{{$msg->created_at}}</td>
	            <td><a href="/mensagens/{{$msg->id}}">{{$msg->titulo}}</a></td>
	            <td>{{$msg->texto}}</td>
	        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection



<!-- \Carbon\Carbon::parse($atividade->scheduledto)->format('d/m/Y h:m')  -->