@extends('layouts.app')

@section('template_title')
    Cao Status Cliente Complemento
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cao Status Cliente Complemento') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cao-status-cliente-complementos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Co Complemento Status</th>
										<th>Ds Status</th>
										<th>Co Status</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($caoStatusClienteComplementos as $caoStatusClienteComplemento)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $caoStatusClienteComplemento->co_complemento_status }}</td>
											<td>{{ $caoStatusClienteComplemento->ds_status }}</td>
											<td>{{ $caoStatusClienteComplemento->co_status }}</td>

                                            <td>
                                                <form action="{{ route('cao-status-cliente-complementos.destroy',$caoStatusClienteComplemento->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cao-status-cliente-complementos.show',$caoStatusClienteComplemento->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cao-status-cliente-complementos.edit',$caoStatusClienteComplemento->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $caoStatusClienteComplementos->links() !!}
            </div>
        </div>
    </div>
@endsection
