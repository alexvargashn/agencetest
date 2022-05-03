@extends('layouts.app')

@section('template_title')
    Cao Os Chamado
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cao Os Chamado') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cao-os-chamados.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Co Chamado</th>
										<th>Co Sistema</th>
										<th>Co Os</th>
										<th>Ds Chamado</th>
										<th>Co Tipo</th>
										<th>Co Prioridade</th>
										<th>Co Item</th>
										<th>Descricao</th>
										<th>Ds Solucao</th>
										<th>Tempo</th>
										<th>Dt Chamado</th>
										<th>Status</th>
										<th>Co Usuario</th>
										<th>Co Analista</th>
										<th>Email</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($caoOsChamados as $caoOsChamado)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $caoOsChamado->co_chamado }}</td>
											<td>{{ $caoOsChamado->co_sistema }}</td>
											<td>{{ $caoOsChamado->co_os }}</td>
											<td>{{ $caoOsChamado->ds_chamado }}</td>
											<td>{{ $caoOsChamado->co_tipo }}</td>
											<td>{{ $caoOsChamado->co_prioridade }}</td>
											<td>{{ $caoOsChamado->co_item }}</td>
											<td>{{ $caoOsChamado->descricao }}</td>
											<td>{{ $caoOsChamado->ds_solucao }}</td>
											<td>{{ $caoOsChamado->tempo }}</td>
											<td>{{ $caoOsChamado->dt_chamado }}</td>
											<td>{{ $caoOsChamado->status }}</td>
											<td>{{ $caoOsChamado->co_usuario }}</td>
											<td>{{ $caoOsChamado->co_analista }}</td>
											<td>{{ $caoOsChamado->email }}</td>

                                            <td>
                                                <form action="{{ route('cao-os-chamados.destroy',$caoOsChamado->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cao-os-chamados.show',$caoOsChamado->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cao-os-chamados.edit',$caoOsChamado->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $caoOsChamados->links() !!}
            </div>
        </div>
    </div>
@endsection
