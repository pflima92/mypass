@extends('layouts.default')
@section('head')
    <title>{{ trans('messages.title') }} - Login</title>
    @stop

    @section('content')
            <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Dashboard
                <small>Dashboard - Manutenção de Senhas</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Dashboard
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">
            <div class="alert alert-info alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <i class="fa fa-info-circle"></i> Guarde suas senhas, com segurança e praticidade através desta
                ferramenta.
            </div>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Painel de Senhas Salvas</h3>
                </div>
                <div class="panel-body">

                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                <tr>
                                    <th>Url</th>
                                    <th>Descrição</th>
                                    <th>Username</th>
                                    <th>Senha</th>
                                    <th>Ação</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($passwords as $password)
                                    <tr>
                                        <td>{{ $password->url }}</td>
                                        <td>{{ $password->description }}</td>
                                        <td>{{ $password->username }}</td>
                                        <td>{{ Crypt::decrypt($password->password) }}</td>
                                        <td>

                                        {!!  Form::open(array('route' => array('password.destroy',  $password->id), 'method' => 'delete')) !!}
                                            <button class="btn btn-warning" type="submit" >Excluir</button>
                                        {!! Form::close() !!}

                                        </td>


                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>

                        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                            Adicionar Nova Senha
                        </button>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->


    {{-- Modal Content--}}

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
         style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="{!!URL::route('password.store')!!}">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="myModalLabel">Inserir Nova Senha</h4>
                    </div>

                    <div class="modal-body">

                        <div class="form-group">
                            <label for="url">URL de Acesso</label>
                            <input type="text" class="form-control" name="url"
                                   placeholder="Nome do Usuário do Aplicativo"/>
                        </div>
                        <div class="form-group">
                            <label for="description">Descrição</label>
                            <input type="text" class="form-control" name="description"
                                   placeholder="Descrição do Aplicativo"/>
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" name="username"
                                   placeholder="Nome do Usuário do Aplicativo"/>
                        </div>
                        <div class="form-group">
                            <label for="password">Senha</label>
                            <input type="password" class="form-control" name="password"
                                   placeholder="Senha do Aplicativo"/>
                        </div>
                        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary">Inserir
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- End Modal Content--}}

@stop