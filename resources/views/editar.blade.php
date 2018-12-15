@extends('template')

@section('conteudo')
	@if ($errors->any())
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif
	<form action="/cliente/{{ $c->id }}/editar" method="post">
		@csrf
		@method('put')
		<div class="form-group">
			<label for="nome">Nome</label>
			<input type="text" class="form-control" value="{{ $c->nome }}" name="nome" id="nome" placeholder="nome">
		</div>
		<div class="form-group">
			<label for="data_nascimento">Data nascimento</label>
			<input type="date" class="form-control" value="{{ $c->data_nascimento }}" name="data_nascimento">
		</div>
		<div class="form-group">
			<label for="estado_civil">Estado civil</label>
			<input type="text" class="form-control" value="{{ $c->estado_civil }}" id="estado_civil" name="estado_civil" placeholder="Estado civil">
		</div>
		<div class="form-group">
			<label for="telefone">Telefone</label>
			<input type="tel" class="form-control" value="{{ $c->telefone }}" id="telefone" placeholder="telefone" name="telefone">
		</div>
		<div class="form-group">
			<label for="endereco">Endereço</label>
			<input type="text" class="form-control" value="{{ $c->endereco }}" id="endereco" placeholder="endereco" name="endereco">
		</div>
		<div class="form-group">
			<label for="email">Email</label>
			<input type="email" class="form-control" value="{{ $c->usuarios }}" name="email" id="email" placeholder="email">
		</div>
		<div class="form-group">
			<label for="senha">Senha</label>
			<input type="password" class="form-control" value="{{ $c->senha }}" name="senha" id="senha" placeholder="senha">
		</div>
		<div class="form-group">
			<label for="cpf">CPF</label>
			<input type="text" class="form-control" value="{{ $c->cpf }}" name="cpf" id="cpf" placeholder="CPF">
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
@stop