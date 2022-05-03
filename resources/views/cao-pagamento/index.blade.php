@extends('layouts.app')

@section('template_title')
    Cao Pagamento
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cao Pagamento') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cao-pagamentos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Co Pagamento</th>
										<th>Co Usuario</th>
										<th>Tp Pagamento</th>
										<th>Dt Pagamento</th>
										<th>Vl Pagamento</th>
										<th>Dt Referencia Pagamento</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($caoPagamentos as $caoPagamento)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $caoPagamento->co_pagamento }}</td>
											<td>{{ $caoPagamento->co_usuario }}</td>
											<td>{{ $caoPagamento->tp_pagamento }}</td>
											<td>{{ $caoPagamento->dt_pagamento }}</td>
											<td>{{ $caoPagamento->vl_pagamento }}</td>
											<td>{{ $caoPagamento->dt_referencia_pagamento }}</td>

                                            <td>
                                                <form action="{{ route('cao-pagamentos.destroy',$caoPagamento->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cao-pagamentos.show',$caoPagamento->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cao-pagamentos.edit',$caoPagamento->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $caoPagamentos->links() !!}
            </div>
        </div>
    </div>
@endsection
