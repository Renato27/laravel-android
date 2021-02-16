<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();

        return view('home', compact('clientes'));
    }

    public function novo()
    {
        return view('novo');
    }

    public function editar($id)
    {
        $cliente = Cliente::find($id);

        return view('editar', compact('cliente'));
    }

    public function adicionar(Request $request)
    {
        try{
        Cliente::create($request->all());

        return redirect('/')->with('success', 'Cliente adicionado com sucessso');

        } catch(\Exception $erro){
            return redirect('/')->with('error', 'Erro ao adicionar cliente');
        }
    }

    public function update(Request $request)
    {
       $cliente = Cliente::find($request->id);
       $cliente->nome       = $request->nome;
       $cliente->telefone   = $request->telefone;
       $cliente->idade      = $request->idade;
       $cliente->email      = $request->email;
       $cliente->save();

        return redirect('/')->with('success', 'Cliente atualizado com sucesso');
    }

    public  function excluir($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();

        return redirect()->back()->with('success', 'Cliente excluido com sucesso');
    }
}
