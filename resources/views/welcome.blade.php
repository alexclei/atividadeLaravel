@extends('template')

@section('conteudo')
<a href="/cliente/criar" class="btn btn-primary">Cadastrar cliente</a>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
	    <th>Nome</th>
	    <th>Estado civil</th>
	    <th>Telefone</th>
	    <th>Endereco</th>
	    <th>Usuarios</th>
	    <th>Cpf</th>
    </tr>
  </thead>
  <tbody>
	@foreach($cliente as $c)
	    <tr>
	    	<th scope="row">1</th>
	    	<td>{{ $c->nome }}</td>
	    	<td>{{ $c->estado_civil }}</td>
	      	<td>{{ $c->telefone }}</td>
	      	<td>{{ $c->endereco }}</td>
	      	<td>{{ $c->usuarios }}</td>
	      	<td>{{ $c->cpf }}</td>
	      	<td><a href="/cliente/{{ $c->id }}/editar" class="btn btn-primary">Editar</a></td>
	      	<td>
	      		<form action="/cliente/{{ $c->id }}/deletar" method="post">
	      			@csrf
	      			@method('delete')
	      			<input type="submit" class="btn btn-primary" value="Excluir">
	      		</form>
	      	</td>
	    </tr>
	@endforeach
  </tbody>
</table>
@stop