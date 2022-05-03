@extends('layouts.app')

@section('template_title')
    Cao Diary Report
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cao Diary Report') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cao-diary-reports.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Co Diary Report</th>
										<th>Hr Gasta</th>
										<th>Co Atividade</th>
										<th>Ds Assunto</th>
										<th>Co Movimento</th>
										<th>Nu Os</th>
										<th>Co Sistema</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($caoDiaryReports as $caoDiaryReport)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $caoDiaryReport->co_diary_report }}</td>
											<td>{{ $caoDiaryReport->hr_gasta }}</td>
											<td>{{ $caoDiaryReport->co_atividade }}</td>
											<td>{{ $caoDiaryReport->ds_assunto }}</td>
											<td>{{ $caoDiaryReport->co_movimento }}</td>
											<td>{{ $caoDiaryReport->nu_os }}</td>
											<td>{{ $caoDiaryReport->co_sistema }}</td>

                                            <td>
                                                <form action="{{ route('cao-diary-reports.destroy',$caoDiaryReport->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cao-diary-reports.show',$caoDiaryReport->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cao-diary-reports.edit',$caoDiaryReport->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $caoDiaryReports->links() !!}
            </div>
        </div>
    </div>
@endsection
