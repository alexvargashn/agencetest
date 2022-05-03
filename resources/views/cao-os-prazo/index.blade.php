@extends('layouts.app')

@section('template_title')
    Cao Os Prazo
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cao Os Prazo') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cao-os-prazos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Co Prazo</th>
										<th>Co Os</th>
										<th>Co Fase</th>
										<th>Total Analista</th>
										<th>Total Hora</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($caoOsPrazos as $caoOsPrazo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $caoOsPrazo->co_prazo }}</td>
											<td>{{ $caoOsPrazo->co_os }}</td>
											<td>{{ $caoOsPrazo->co_fase }}</td>
											<td>{{ $caoOsPrazo->total_analista }}</td>
											<td>{{ $caoOsPrazo->total_hora }}</td>

                                            <td>
                                                <form action="{{ route('cao-os-prazos.destroy',$caoOsPrazo->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cao-os-prazos.show',$caoOsPrazo->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cao-os-prazos.edit',$caoOsPrazo->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $caoOsPrazos->links() !!}
            </div>
        </div>
    </div>
@endsection
