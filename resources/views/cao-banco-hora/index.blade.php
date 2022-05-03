@extends('layouts.app')

@section('template_title')
    Cao Banco Hora
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cao Banco Hora') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cao-banco-horas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Co Banc Horas</th>
										<th>Co Usuario</th>
										<th>Periodo</th>
										<th>Min Mes</th>
										<th>Min Ferias</th>
										<th>Min Pago</th>
										<th>Min Total</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($caoBancoHoras as $caoBancoHora)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $caoBancoHora->co_banc_horas }}</td>
											<td>{{ $caoBancoHora->co_usuario }}</td>
											<td>{{ $caoBancoHora->periodo }}</td>
											<td>{{ $caoBancoHora->min_mes }}</td>
											<td>{{ $caoBancoHora->min_ferias }}</td>
											<td>{{ $caoBancoHora->min_pago }}</td>
											<td>{{ $caoBancoHora->min_total }}</td>

                                            <td>
                                                <form action="{{ route('cao-banco-horas.destroy',$caoBancoHora->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cao-banco-horas.show',$caoBancoHora->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cao-banco-horas.edit',$caoBancoHora->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $caoBancoHoras->links() !!}
            </div>
        </div>
    </div>
@endsection
