@extends('adminlte::page')

@section('title', 'Home')

@section('content_header')
    <h1>Clientes</h1>
@stop

@section('content')
<div class="box-body">
    <table class="table table-bordered">
      <tbody><tr>
        <th style="width: 10px">#</th>
        <th>Nome</th>
        <th>Telefone</th>
        <th style="width: 40px">idade</th>
        <th>Email</th>
        <th>Opções</th>
      </tr>
      @foreach ($clientes as $cliente)
      <tr>
        <td>{{$cliente->id}}</td>
        <td>{{$cliente->nome}}</td>
        <td>{{$cliente->telefone}}</td>
        <td>{{$cliente->idade}}</td>
        <td>{{$cliente->email}}</td>
        <td>
            <a class="btn btn-info btn-sm" href="editar/{{$cliente->id}}">Editar</a> 
            <a class="btn btn-danger btn-sm" href="excluir/{{$cliente->id}}">Excluir</a>
        </td>    
      </tr>
      @endforeach
    </tbody></table>
  </div>
@stop