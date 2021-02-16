@extends('adminlte::page')

@section('title', 'Novo Cliente')

@section('content_header')
    <h1>Novo Cliente</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="box box-primary">
                <form role="form" method="post">
                  <div class="box-body">
                    {{ csrf_field() }}
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nome</label>
                      <input type="text" class="form-control" name="nome" placeholder="Enter name" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Telefone</label>
                      <input type="text" class="form-control" name="telefone" placeholder="Enter telefone" required>
                    </div>
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Idade</label>
                      <input type="number" class="form-control" name="idade" placeholder="Enter idade">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Email</label>
                      <input type="email" class="form-control" name="email" placeholder="Enter email" required>
                    </div>
                  </div>
                  <!-- /.box-body -->
    
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
        </div>
    </div>
@stop