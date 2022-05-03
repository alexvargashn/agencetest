@extends('layouts.app')

@section('template_title')
    Cao Atividade Report
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cao Atividade Report') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cao-atividade-reports.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Co Cliente</th>
										<th>Inicio</th>
										<th>Fim</th>
										<th>Lembrete</th>
										<th>Co Atividade</th>
										<th>Co Os</th>
										<th>Assunto</th>
										<th>Conteudo</th>
										<th>Status</th>
										<th>Tempo</th>
										<th>Co Usuario</th>
										<th>Data Ativ</th>
										<th>Retorno</th>
										<th>Co Fase</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($caoAtividadeReports as $caoAtividadeReport)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $caoAtividadeReport->co_cliente }}</td>
											<td>{{ $caoAtividadeReport->inicio }}</td>
											<td>{{ $caoAtividadeReport->fim }}</td>
											<td>{{ $caoAtividadeReport->lembrete }}</td>
											<td>{{ $caoAtividadeReport->co_atividade }}</td>
											<td>{{ $caoAtividadeReport->co_os }}</td>
											<td>{{ $caoAtividadeReport->assunto }}</td>
											<td>{{ $caoAtividadeReport->conteudo }}</td>
											<td>{{ $caoAtividadeReport->status }}</td>
											<td>{{ $caoAtividadeReport->tempo }}</td>
											<td>{{ $caoAtividadeReport->co_usuario }}</td>
											<td>{{ $caoAtividadeReport->data_ativ }}</td>
											<td>{{ $caoAtividadeReport->retorno }}</td>
											<td>{{ $caoAtividadeReport->co_fase }}</td>

                                            <td>
                                                <form action="{{ route('cao-atividade-reports.destroy',$caoAtividadeReport->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cao-atividade-reports.show',$caoAtividadeReport->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cao-atividade-reports.edit',$caoAtividadeReport->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $caoAtividadeReports->links() !!}
            </div>
        </div>
    </div>
@endsection
