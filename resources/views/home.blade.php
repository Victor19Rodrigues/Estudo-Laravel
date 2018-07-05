<h1>Lista de Tarefas</h1>

<!-- 
	chave->item

	item vem do BD 
-->
@if(count($lista) > 0)
	<ul>
		@foreach($lista as $chave)
		<li>{{$chave->item}} - <a href="delete/{{$chave->id}}">[x]</a></li>
		@endforeach
	</ul>
@else 
	<h4>Não há itens</h4>
@endif

<hr>

<form method="POST">
	{{csrf_field()}}
	<input type="text" name="item">
	<input type="submit" value="+" name="">
</form>