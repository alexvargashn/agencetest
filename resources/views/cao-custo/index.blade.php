@extends('layouts.app')

@section('template_title')
    Cao Custo
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cao Custo') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cao-custos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Co Custo</th>
										<th>Co Tipo Custo</th>
										<th>Descricao</th>
										<th>Co Escritorio</th>
										<th>Dt Compra</th>
										<th>Dt Pagamento</th>
										<th>Co Boleto</th>
										<th>Valor</th>
										<th>Parcela</th>
										<th>Pag</th>
										<th>Co Custo High</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($caoCustos as $caoCusto)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $caoCusto->co_custo }}</td>
											<td>{{ $caoCusto->co_tipo_custo }}</td>
											<td>{{ $caoCusto->descricao }}</td>
											<td>{{ $caoCusto->co_escritorio }}</td>
											<td>{{ $caoCusto->dt_compra }}</td>
											<td>{{ $caoCusto->dt_pagamento }}</td>
											<td>{{ $caoCusto->co_boleto }}</td>
											<td>{{ $caoCusto->valor }}</td>
											<td>{{ $caoCusto->parcela }}</td>
											<td>{{ $caoCusto->pag }}</td>
											<td>{{ $caoCusto->co_custo_high }}</td>

                                            <td>
                                                <form action="{{ route('cao-custos.destroy',$caoCusto->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cao-custos.show',$caoCusto->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cao-custos.edit',$caoCusto->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $caoCustos->links() !!}
            </div>
        </div>
    </div>
@endsection
