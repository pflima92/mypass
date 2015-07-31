@extends('layouts.default')
@section('head')
    <title>{{ trans('messages.title') }} - Login</title>
    @stop

    @section('content')
            <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <small>Dashboard - Configuração da Conta</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Dashboard \  <i class="fa fa-user"></i> Perfil
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">
            <div class="alert alert-info alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <i class="fa fa-info-circle"></i> Atualizar dados do perfil do usuário.
            </div>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-user"></i> Dados Usuário</h3>
                </div>
                <div class="panel-body">

                    <div class="panel-body">
                        <div>
                            <label>Nome do Usuário: </label> {{ Auth::user()->name }}
                        </div>
                        <div>
                            <label>Email: </label> {{ Auth::user()->email }}
                        </div>
                        <div>
                            <label>Status: </label> {{ Auth::user()->active == 1 ? 'ATIVO' : 'INATIVO' }}
                        </div>

                        <br/>

                        <hr/>
                        {!!  Form::open(array('url' => 'account/inactive', 'method' => 'delete')) !!}
                        <button class="btn btn-warning" type="submit">Desativar Conta</button>
                        {!! Form::close() !!}


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
                        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}"/>
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

    <script type="text/javascript">

        function copyToClipboard(param) {
            if (window.clipboardData && clipboardData.setData) {
                clipboardData.setData('text', param);
            }else{
                window.prompt("Copy to clipboard: Ctrl+C, Enter", param);
            }

        }

    </script>

@stop