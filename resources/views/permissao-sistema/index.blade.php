@extends('layouts.app')

@section('template_title')
    Permissao Sistema
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Permissao Sistema') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('permissao-sistemas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Co Usuario</th>
										<th>Co Tipo Usuario</th>
										<th>Co Sistema</th>
										<th>In Ativo</th>
										<th>Co Usuario Atualizacao</th>
										<th>Dt Atualizacao</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($permissaoSistemas as $permissaoSistema)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $permissaoSistema->co_usuario }}</td>
											<td>{{ $permissaoSistema->co_tipo_usuario }}</td>
											<td>{{ $permissaoSistema->co_sistema }}</td>
											<td>{{ $permissaoSistema->in_ativo }}</td>
											<td>{{ $permissaoSistema->co_usuario_atualizacao }}</td>
											<td>{{ $permissaoSistema->dt_atualizacao }}</td>

                                            <td>
                                                <form action="{{ route('permissao-sistemas.destroy',$permissaoSistema->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('permissao-sistemas.show',$permissaoSistema->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('permissao-sistemas.edit',$permissaoSistema->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $permissaoSistemas->links() !!}
            </div>
        </div>
    </div>
@endsection
