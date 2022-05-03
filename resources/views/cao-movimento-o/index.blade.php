@extends('layouts.app')

@section('template_title')
    Cao Movimento O
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cao Movimento O') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cao-movimento-os.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Co Movimento Os</th>
										<th>Nu Os</th>
										<th>Co Sistema</th>
										<th>Co Tipo Movimento</th>
										<th>Nu Valor</th>
										<th>Ds Valor</th>
										<th>Usuario Obs</th>
										<th>Dt Ini</th>
										<th>Dt Fim</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($caoMovimentoOs as $caoMovimentoO)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $caoMovimentoO->co_movimento_os }}</td>
											<td>{{ $caoMovimentoO->nu_os }}</td>
											<td>{{ $caoMovimentoO->co_sistema }}</td>
											<td>{{ $caoMovimentoO->co_tipo_movimento }}</td>
											<td>{{ $caoMovimentoO->nu_valor }}</td>
											<td>{{ $caoMovimentoO->ds_valor }}</td>
											<td>{{ $caoMovimentoO->usuario_obs }}</td>
											<td>{{ $caoMovimentoO->dt_ini }}</td>
											<td>{{ $caoMovimentoO->dt_fim }}</td>

                                            <td>
                                                <form action="{{ route('cao-movimento-os.destroy',$caoMovimentoO->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cao-movimento-os.show',$caoMovimentoO->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cao-movimento-os.edit',$caoMovimentoO->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $caoMovimentoOs->links() !!}
            </div>
        </div>
    </div>
@endsection
