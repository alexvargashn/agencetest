@extends('layouts.app')

@section('template_title')
    Cao Bonus Status
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cao Bonus Status') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cao-bonus-statuses.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Data Solic</th>
										<th>Mes</th>
										<th>Valor</th>
										<th>Is Solic</th>
										<th>Is Pg</th>
										<th>Is Horas</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($caoBonusStatuses as $caoBonusStatus)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $caoBonusStatus->co_usuario }}</td>
											<td>{{ $caoBonusStatus->data_solic }}</td>
											<td>{{ $caoBonusStatus->mes }}</td>
											<td>{{ $caoBonusStatus->valor }}</td>
											<td>{{ $caoBonusStatus->is_solic }}</td>
											<td>{{ $caoBonusStatus->is_pg }}</td>
											<td>{{ $caoBonusStatus->is_horas }}</td>

                                            <td>
                                                <form action="{{ route('cao-bonus-statuses.destroy',$caoBonusStatus->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cao-bonus-statuses.show',$caoBonusStatus->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cao-bonus-statuses.edit',$caoBonusStatus->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $caoBonusStatuses->links() !!}
            </div>
        </div>
    </div>
@endsection
