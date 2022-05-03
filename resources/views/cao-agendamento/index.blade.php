@extends('layouts.app')

@section('template_title')
    Cao Agendamento
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cao Agendamento') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cao-agendamentos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Co Agendamento</th>
										<th>Dt Hr Inicio</th>
										<th>Dt Hr Fim</th>
										<th>Co Status Agendamento</th>
										<th>Co Diary Report Consultor</th>
										<th>Co Complemento</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($caoAgendamentos as $caoAgendamento)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $caoAgendamento->co_agendamento }}</td>
											<td>{{ $caoAgendamento->dt_hr_inicio }}</td>
											<td>{{ $caoAgendamento->dt_hr_fim }}</td>
											<td>{{ $caoAgendamento->co_status_agendamento }}</td>
											<td>{{ $caoAgendamento->co_diary_report_consultor }}</td>
											<td>{{ $caoAgendamento->co_complemento }}</td>

                                            <td>
                                                <form action="{{ route('cao-agendamentos.destroy',$caoAgendamento->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cao-agendamentos.show',$caoAgendamento->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cao-agendamentos.edit',$caoAgendamento->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $caoAgendamentos->links() !!}
            </div>
        </div>
    </div>
@endsection
