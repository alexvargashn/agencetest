@extends('layouts.app')

@section('template_title')
    Cao Boleto
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cao Boleto') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cao-boletos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Co Boleto</th>
										<th>Co Cliente</th>
										<th>Co Sistema</th>
										<th>Co Os</th>
										<th>Valor</th>
										<th>Vencimento</th>
										<th>Status</th>
										<th>Boleto</th>
										<th>Linha Dig</th>
										<th>Parcela</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($caoBoletos as $caoBoleto)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $caoBoleto->co_boleto }}</td>
											<td>{{ $caoBoleto->co_cliente }}</td>
											<td>{{ $caoBoleto->co_sistema }}</td>
											<td>{{ $caoBoleto->co_os }}</td>
											<td>{{ $caoBoleto->valor }}</td>
											<td>{{ $caoBoleto->vencimento }}</td>
											<td>{{ $caoBoleto->status }}</td>
											<td>{{ $caoBoleto->boleto }}</td>
											<td>{{ $caoBoleto->linha_dig }}</td>
											<td>{{ $caoBoleto->parcela }}</td>

                                            <td>
                                                <form action="{{ route('cao-boletos.destroy',$caoBoleto->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cao-boletos.show',$caoBoleto->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cao-boletos.edit',$caoBoleto->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $caoBoletos->links() !!}
            </div>
        </div>
    </div>
@endsection
