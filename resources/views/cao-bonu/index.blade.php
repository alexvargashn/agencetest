@extends('layouts.app')

@section('template_title')
    Cao Bonu
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cao Bonu') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cao-bonus.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Bon Categoria</th>
										<th>Bon Inicio</th>
										<th>Bon Fim</th>
										<th>Bon Valor Sem</th>
										<th>Bon Valor Fimsem</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($caoBonus as $caoBonu)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $caoBonu->bon_categoria }}</td>
											<td>{{ $caoBonu->bon_inicio }}</td>
											<td>{{ $caoBonu->bon_fim }}</td>
											<td>{{ $caoBonu->bon_valor_sem }}</td>
											<td>{{ $caoBonu->bon_valor_fimsem }}</td>

                                            <td>
                                                <form action="{{ route('cao-bonus.destroy',$caoBonu->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cao-bonus.show',$caoBonu->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cao-bonus.edit',$caoBonu->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $caoBonus->links() !!}
            </div>
        </div>
    </div>
@endsection
