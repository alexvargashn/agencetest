@extends('layouts.app')

@section('template_title')
    Cao Diary Report Consultor
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cao Diary Report Consultor') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cao-diary-report-consultors.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Co Diary Report Consultor</th>
										<th>Co Movimento</th>
										<th>Co Atividade</th>
										<th>Ds Empresa</th>
										<th>Ds Assunto</th>
										<th>Dt Agendamento</th>
										<th>Dt Agendamento Fim</th>
										<th>Vl Fechamento</th>
										<th>Co Cliente</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($caoDiaryReportConsultors as $caoDiaryReportConsultor)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $caoDiaryReportConsultor->co_diary_report_consultor }}</td>
											<td>{{ $caoDiaryReportConsultor->co_movimento }}</td>
											<td>{{ $caoDiaryReportConsultor->co_atividade }}</td>
											<td>{{ $caoDiaryReportConsultor->ds_empresa }}</td>
											<td>{{ $caoDiaryReportConsultor->ds_assunto }}</td>
											<td>{{ $caoDiaryReportConsultor->dt_agendamento }}</td>
											<td>{{ $caoDiaryReportConsultor->dt_agendamento_fim }}</td>
											<td>{{ $caoDiaryReportConsultor->vl_fechamento }}</td>
											<td>{{ $caoDiaryReportConsultor->co_cliente }}</td>

                                            <td>
                                                <form action="{{ route('cao-diary-report-consultors.destroy',$caoDiaryReportConsultor->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cao-diary-report-consultors.show',$caoDiaryReportConsultor->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cao-diary-report-consultors.edit',$caoDiaryReportConsultor->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $caoDiaryReportConsultors->links() !!}
            </div>
        </div>
    </div>
@endsection
