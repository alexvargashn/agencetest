@extends('layouts.app')

@section('template_title')
    Cao O
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cao O') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cao-os.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Co Os</th>
										<th>Nu Os</th>
										<th>Co Sistema</th>
										<th>Co Usuario</th>
										<th>Co Arquitetura</th>
										<th>Ds Os</th>
										<th>Ds Caracteristica</th>
										<th>Ds Requisito</th>
										<th>Dt Inicio</th>
										<th>Dt Fim</th>
										<th>Co Status</th>
										<th>Diretoria Sol</th>
										<th>Dt Sol</th>
										<th>Nu Tel Sol</th>
										<th>Ddd Tel Sol</th>
										<th>Nu Tel Sol2</th>
										<th>Ddd Tel Sol2</th>
										<th>Usuario Sol</th>
										<th>Dt Imp</th>
										<th>Dt Garantia</th>
										<th>Co Email</th>
										<th>Co Os Prospect Rel</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($caoOs as $caoO)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $caoO->co_os }}</td>
											<td>{{ $caoO->nu_os }}</td>
											<td>{{ $caoO->co_sistema }}</td>
											<td>{{ $caoO->co_usuario }}</td>
											<td>{{ $caoO->co_arquitetura }}</td>
											<td>{{ $caoO->ds_os }}</td>
											<td>{{ $caoO->ds_caracteristica }}</td>
											<td>{{ $caoO->ds_requisito }}</td>
											<td>{{ $caoO->dt_inicio }}</td>
											<td>{{ $caoO->dt_fim }}</td>
											<td>{{ $caoO->co_status }}</td>
											<td>{{ $caoO->diretoria_sol }}</td>
											<td>{{ $caoO->dt_sol }}</td>
											<td>{{ $caoO->nu_tel_sol }}</td>
											<td>{{ $caoO->ddd_tel_sol }}</td>
											<td>{{ $caoO->nu_tel_sol2 }}</td>
											<td>{{ $caoO->ddd_tel_sol2 }}</td>
											<td>{{ $caoO->usuario_sol }}</td>
											<td>{{ $caoO->dt_imp }}</td>
											<td>{{ $caoO->dt_garantia }}</td>
											<td>{{ $caoO->co_email }}</td>
											<td>{{ $caoO->co_os_prospect_rel }}</td>

                                            <td>
                                                <form action="{{ route('cao-os.destroy',$caoO->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cao-os.show',$caoO->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cao-os.edit',$caoO->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $caoOs->links() !!}
            </div>
        </div>
    </div>
@endsection
