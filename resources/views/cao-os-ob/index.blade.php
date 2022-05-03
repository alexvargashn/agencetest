@extends('layouts.app')

@section('template_title')
    Cao Os Ob
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cao Os Ob') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cao-os-obs.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Co Obs</th>
										<th>Co Os</th>
										<th>Co Usuario</th>
										<th>Descricao</th>
										<th>Dt Obs</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($caoOsObs as $caoOsOb)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $caoOsOb->co_obs }}</td>
											<td>{{ $caoOsOb->co_os }}</td>
											<td>{{ $caoOsOb->co_usuario }}</td>
											<td>{{ $caoOsOb->descricao }}</td>
											<td>{{ $caoOsOb->dt_obs }}</td>

                                            <td>
                                                <form action="{{ route('cao-os-obs.destroy',$caoOsOb->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cao-os-obs.show',$caoOsOb->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cao-os-obs.edit',$caoOsOb->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $caoOsObs->links() !!}
            </div>
        </div>
    </div>
@endsection
