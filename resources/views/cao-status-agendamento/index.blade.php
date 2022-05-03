@extends('layouts.app')

@section('template_title')
    Cao Status Agendamento
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cao Status Agendamento') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cao-status-agendamentos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Co Status Agendamento</th>
										<th>Ds Status Agendamento</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($caoStatusAgendamentos as $caoStatusAgendamento)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $caoStatusAgendamento->co_status_agendamento }}</td>
											<td>{{ $caoStatusAgendamento->ds_status_agendamento }}</td>

                                            <td>
                                                <form action="{{ route('cao-status-agendamentos.destroy',$caoStatusAgendamento->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cao-status-agendamentos.show',$caoStatusAgendamento->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cao-status-agendamentos.edit',$caoStatusAgendamento->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $caoStatusAgendamentos->links() !!}
            </div>
        </div>
    </div>
@endsection
