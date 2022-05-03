@extends('layouts.app')

@section('template_title')
    Cao Os Daily Report
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cao Os Daily Report') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cao-os-daily-reports.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Co Daily</th>
										<th>Co Os</th>
										<th>Co Fase</th>
										<th>Co Usuario</th>
										<th>Ds Assunto</th>
										<th>Tempo Gasto</th>
										<th>Data</th>
										<th>Co Status Atual</th>
										<th>Co Chamado</th>
										<th>Co Atividade</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($caoOsDailyReports as $caoOsDailyReport)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $caoOsDailyReport->co_daily }}</td>
											<td>{{ $caoOsDailyReport->co_os }}</td>
											<td>{{ $caoOsDailyReport->co_fase }}</td>
											<td>{{ $caoOsDailyReport->co_usuario }}</td>
											<td>{{ $caoOsDailyReport->ds_assunto }}</td>
											<td>{{ $caoOsDailyReport->tempo_gasto }}</td>
											<td>{{ $caoOsDailyReport->data }}</td>
											<td>{{ $caoOsDailyReport->co_status_atual }}</td>
											<td>{{ $caoOsDailyReport->co_chamado }}</td>
											<td>{{ $caoOsDailyReport->co_atividade }}</td>

                                            <td>
                                                <form action="{{ route('cao-os-daily-reports.destroy',$caoOsDailyReport->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cao-os-daily-reports.show',$caoOsDailyReport->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cao-os-daily-reports.edit',$caoOsDailyReport->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $caoOsDailyReports->links() !!}
            </div>
        </div>
    </div>
@endsection
