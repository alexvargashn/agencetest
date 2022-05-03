@extends('layouts.app')

@section('template_title')
    Cao Valor Descanso
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cao Valor Descanso') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cao-valor-descansos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Co Usuario</th>
										<th>Segundos</th>
										<th>Mes Referencia</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($caoValorDescansos as $caoValorDescanso)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $caoValorDescanso->co_usuario }}</td>
											<td>{{ $caoValorDescanso->segundos }}</td>
											<td>{{ $caoValorDescanso->mes_referencia }}</td>

                                            <td>
                                                <form action="{{ route('cao-valor-descansos.destroy',$caoValorDescanso->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cao-valor-descansos.show',$caoValorDescanso->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cao-valor-descansos.edit',$caoValorDescanso->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $caoValorDescansos->links() !!}
            </div>
        </div>
    </div>
@endsection
