@extends('layouts.app')

@section('template_title')
    Cao Fatura Pag
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cao Fatura Pag') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cao-fatura-pags.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Id Fatura Pag</th>
										<th>Co Fatura</th>
										<th>Dt Efetuado</th>
										<th>Valor Pago</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($caoFaturaPags as $caoFaturaPag)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $caoFaturaPag->id_fatura_pag }}</td>
											<td>{{ $caoFaturaPag->co_fatura }}</td>
											<td>{{ $caoFaturaPag->dt_efetuado }}</td>
											<td>{{ $caoFaturaPag->valor_pago }}</td>

                                            <td>
                                                <form action="{{ route('cao-fatura-pags.destroy',$caoFaturaPag->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cao-fatura-pags.show',$caoFaturaPag->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cao-fatura-pags.edit',$caoFaturaPag->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $caoFaturaPags->links() !!}
            </div>
        </div>
    </div>
@endsection
