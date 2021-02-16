<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cliente;

class ClienteController extends Controller
{
    public function clientes()
    {
        return Cliente::all();
    }

    public function getCliente($id)
    {
        $cliente = Cliente::find($id);
        return $cliente;
    }

    public function adicionar(Request $request)
    {
        try{
            Cliente::create($request->all());
            return ['insert' => 'ok'];

        } catch(\Exception $erro){
            return ['insert' => 'erro'];
        }
    }

    public function atualizar(Request $request, $id)
    {
        try{
            $cliente = Cliente::find($id);
            $cliente->nome       = $request->nome;
            $cliente->telefone   = $request->telefone;
            $cliente->idade      = $request->idade;
            $cliente->email      = $request->email;
            $cliente->save();

            return ['update' => 'ok'];

        }catch(\Exception $erro){
            return ['update' => 'erro'];
        }
    }

    public function delete($id)
    {
        try{
            $cliente = Cliente::find($id);
            $cliente->delete();

            return ['delete' => 'ok'];
        
        } catch(\Exception $erro){
            return ['delete' => 'erro'];
        }
    }
}
