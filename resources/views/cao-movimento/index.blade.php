@extends('layouts.app')

@section('template_title')
    Cao Movimento
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cao Movimento') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cao-movimentos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Co Movimento</th>
										<th>Co Usuario</th>
										<th>Dt Entrada</th>
										<th>Dt Saida Almoco</th>
										<th>Dt Volta Almoco</th>
										<th>Dt Saida</th>
										<th>Is Encerrado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($caoMovimentos as $caoMovimento)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $caoMovimento->co_movimento }}</td>
											<td>{{ $caoMovimento->co_usuario }}</td>
											<td>{{ $caoMovimento->dt_entrada }}</td>
											<td>{{ $caoMovimento->dt_saida_almoco }}</td>
											<td>{{ $caoMovimento->dt_volta_almoco }}</td>
											<td>{{ $caoMovimento->dt_saida }}</td>
											<td>{{ $caoMovimento->is_encerrado }}</td>

                                            <td>
                                                <form action="{{ route('cao-movimentos.destroy',$caoMovimento->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cao-movimentos.show',$caoMovimento->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cao-movimentos.edit',$caoMovimento->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $caoMovimentos->links() !!}
            </div>
        </div>
    </div>
@endsection
