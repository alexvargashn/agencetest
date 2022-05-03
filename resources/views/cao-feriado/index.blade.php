@extends('layouts.app')

@section('template_title')
    Cao Feriado
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cao Feriado') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cao-feriados.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Dia</th>
										<th>Mes</th>
										<th>Ano</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($caoFeriados as $caoFeriado)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $caoFeriado->dia }}</td>
											<td>{{ $caoFeriado->mes }}</td>
											<td>{{ $caoFeriado->ano }}</td>

                                            <td>
                                                <form action="{{ route('cao-feriados.destroy',$caoFeriado->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cao-feriados.show',$caoFeriado->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cao-feriados.edit',$caoFeriado->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $caoFeriados->links() !!}
            </div>
        </div>
    </div>
@endsection
