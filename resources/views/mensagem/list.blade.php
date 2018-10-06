<h1>Lista de Mensagens</h1>
<hr>
@foreach($mensagens as $mensagem)
	<h3>{{$mensagem->autor}}</h3>
	<p><a href="/mensagens/{{$mensagem->id}}">{{$mensagem->titulo}}</a></p>
	<p>{{$mensagem->texto}}</p>
	<hr>
@endforeach

{{ $mensagens->links() }}

