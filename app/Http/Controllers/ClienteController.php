<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClienteController extends Controller
{
    public function index()
    {
    	$cliente = Cliente::all();
    	return view('welcome', compact('cliente'));
    }

    public function create()
    {
    	return view('criar');
    }

    public function save(Request $request)
    {
    	$validatedData = $request->validate([
	        'nome' => 'required',
	        'data_nascimento' => 'required|date',
	        'estado_civil' => 'required',
	        'telefone' => 'required',
	        'endereco' => 'required',
	        'email' => 'required|email',
	        'senha' => 'required',
	        'cpf' => 'required',
	    ]);
	    $cliente = new Cliente;
	    $cliente->nome = $request->nome;
	    $cliente->data_nascimento = $request->data_nascimento;
	    $cliente->estado_civil = $request->estado_civil;
	    $cliente->telefone = $request->telefone;
	    $cliente->endereco = $request->endereco;
	    $cliente->usuarios = $request->email;
	    $cliente->senha = $request->senha;
	    $cliente->cpf = $request->cpf;
	    $cliente->save();
    	return redirect('/');
    }

    public function edit($id)
    {
    	$c = Cliente::find($id);
    	return view('editar', compact('c'));
    }

    public function update(Request $request, $id)
    {
    	$validatedData = $request->validate([
	        'nome' => 'required',
	        'data_nascimento' => 'required|date',
	        'estado_civil' => 'required',
	        'telefone' => 'required|',
	        'endereco' => 'required',
	        'email' => 'required|email',
	        'senha' => 'required',
	        'cpf' => 'required',
	    ]);
	    $cliente = Cliente::find($id);
	    $cliente->nome = $request->nome;
	    $cliente->data_nascimento = $request->data_nascimento;
	    $cliente->estado_civil = $request->estado_civil;
	    $cliente->telefone = $request->telefone;
	    $cliente->endereco = $request->endereco;
	    $cliente->usuarios = $request->email;
	    $cliente->senha = $request->senha;
	    $cliente->cpf = $request->cpf;
	    $cliente->update();
    	return redirect('/');
    }

    public function destroy($id)
    {
    	$c = Cliente::find($id);
    	$c->delete();
    	return redirect('/');
    }
}
