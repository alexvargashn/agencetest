@extends('layouts.app')

@section('template_title')
    Cao Salario Pag
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cao Salario Pag') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cao-salario-pags.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Id Pagamento</th>
										<th>Co Usuario</th>
										<th>Dt Efetuado</th>
										<th>Status</th>
										<th>Observacao</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($caoSalarioPags as $caoSalarioPag)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $caoSalarioPag->id_pagamento }}</td>
											<td>{{ $caoSalarioPag->co_usuario }}</td>
											<td>{{ $caoSalarioPag->dt_efetuado }}</td>
											<td>{{ $caoSalarioPag->status }}</td>
											<td>{{ $caoSalarioPag->observacao }}</td>

                                            <td>
                                                <form action="{{ route('cao-salario-pags.destroy',$caoSalarioPag->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cao-salario-pags.show',$caoSalarioPag->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cao-salario-pags.edit',$caoSalarioPag->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $caoSalarioPags->links() !!}
            </div>
        </div>
    </div>
@endsection
