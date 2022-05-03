@extends('layouts.app')

@section('template_title')
    Cao Sistema
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cao Sistema') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cao-sistemas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Co Sistema</th>
										<th>Co Cliente</th>
										<th>Co Usuario</th>
										<th>Co Arquitetura</th>
										<th>No Sistema</th>
										<th>Ds Sistema Resumo</th>
										<th>Ds Caracteristica</th>
										<th>Ds Requisito</th>
										<th>No Diretoria Solic</th>
										<th>Ddd Telefone Solic</th>
										<th>Nu Telefone Solic</th>
										<th>No Usuario Solic</th>
										<th>Dt Solicitacao</th>
										<th>Dt Entrega</th>
										<th>Co Email</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($caoSistemas as $caoSistema)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $caoSistema->co_sistema }}</td>
											<td>{{ $caoSistema->co_cliente }}</td>
											<td>{{ $caoSistema->co_usuario }}</td>
											<td>{{ $caoSistema->co_arquitetura }}</td>
											<td>{{ $caoSistema->no_sistema }}</td>
											<td>{{ $caoSistema->ds_sistema_resumo }}</td>
											<td>{{ $caoSistema->ds_caracteristica }}</td>
											<td>{{ $caoSistema->ds_requisito }}</td>
											<td>{{ $caoSistema->no_diretoria_solic }}</td>
											<td>{{ $caoSistema->ddd_telefone_solic }}</td>
											<td>{{ $caoSistema->nu_telefone_solic }}</td>
											<td>{{ $caoSistema->no_usuario_solic }}</td>
											<td>{{ $caoSistema->dt_solicitacao }}</td>
											<td>{{ $caoSistema->dt_entrega }}</td>
											<td>{{ $caoSistema->co_email }}</td>

                                            <td>
                                                <form action="{{ route('cao-sistemas.destroy',$caoSistema->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cao-sistemas.show',$caoSistema->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cao-sistemas.edit',$caoSistema->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $caoSistemas->links() !!}
            </div>
        </div>
    </div>
@endsection
