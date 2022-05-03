@extends('layouts.app')

@section('template_title')
    Cao Fatura
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cao Fatura') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cao-faturas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Co Fatura</th>
										<th>Co Cliente</th>
										<th>Co Sistema</th>
										<th>Co Os</th>
										<th>Num Nf</th>
										<th>Total</th>
										<th>Valor</th>
										<th>Data Emissao</th>
										<th>Corpo Nf</th>
										<th>Comissao Cn</th>
										<th>Total Imp Inc</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($caoFaturas as $caoFatura)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $caoFatura->co_fatura }}</td>
											<td>{{ $caoFatura->co_cliente }}</td>
											<td>{{ $caoFatura->co_sistema }}</td>
											<td>{{ $caoFatura->co_os }}</td>
											<td>{{ $caoFatura->num_nf }}</td>
											<td>{{ $caoFatura->total }}</td>
											<td>{{ $caoFatura->valor }}</td>
											<td>{{ $caoFatura->data_emissao }}</td>
											<td>{{ $caoFatura->corpo_nf }}</td>
											<td>{{ $caoFatura->comissao_cn }}</td>
											<td>{{ $caoFatura->total_imp_inc }}</td>

                                            <td>
                                                <form action="{{ route('cao-faturas.destroy',$caoFatura->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cao-faturas.show',$caoFatura->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cao-faturas.edit',$caoFatura->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $caoFaturas->links() !!}
            </div>
        </div>
    </div>
@endsection
