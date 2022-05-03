@extends('layouts.app')

@section('template_title')
    Cao Log Chamado
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cao Log Chamado') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cao-log-chamados.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Dt Chamado</th>
										<th>Co Usuario</th>
										<th>Co Daily</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($caoLogChamados as $caoLogChamado)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $caoLogChamado->co_chamado }}</td>
											<td>{{ $caoLogChamado->dt_chamado }}</td>
											<td>{{ $caoLogChamado->co_usuario }}</td>
											<td>{{ $caoLogChamado->co_daily }}</td>

                                            <td>
                                                <form action="{{ route('cao-log-chamados.destroy',$caoLogChamado->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cao-log-chamados.show',$caoLogChamado->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cao-log-chamados.edit',$caoLogChamado->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $caoLogChamados->links() !!}
            </div>
        </div>
    </div>
@endsection
