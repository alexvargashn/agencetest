@extends('layouts.app')

@section('template_title')
    Cao Help Chamado
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cao Help Chamado') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cao-help-chamados.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Ds Chamado</th>
										<th>Ds Solucao</th>
										<th>Co Status</th>
										<th>Co Motivo</th>
										<th>Co Tela</th>
										<th>Co Autor</th>
										<th>Co Filial</th>
										<th>Co Sistema</th>
										<th>Dt Chamado</th>
										<th>Dt Solucao</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($caoHelpChamados as $caoHelpChamado)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $caoHelpChamado->co_chamado }}</td>
											<td>{{ $caoHelpChamado->ds_chamado }}</td>
											<td>{{ $caoHelpChamado->ds_solucao }}</td>
											<td>{{ $caoHelpChamado->co_status }}</td>
											<td>{{ $caoHelpChamado->co_motivo }}</td>
											<td>{{ $caoHelpChamado->co_tela }}</td>
											<td>{{ $caoHelpChamado->co_autor }}</td>
											<td>{{ $caoHelpChamado->co_filial }}</td>
											<td>{{ $caoHelpChamado->co_sistema }}</td>
											<td>{{ $caoHelpChamado->dt_chamado }}</td>
											<td>{{ $caoHelpChamado->dt_solucao }}</td>

                                            <td>
                                                <form action="{{ route('cao-help-chamados.destroy',$caoHelpChamado->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cao-help-chamados.show',$caoHelpChamado->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cao-help-chamados.edit',$caoHelpChamado->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $caoHelpChamados->links() !!}
            </div>
        </div>
    </div>
@endsection
