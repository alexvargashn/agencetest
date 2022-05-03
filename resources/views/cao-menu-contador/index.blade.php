@extends('layouts.app')

@section('template_title')
    Cao Menu Contador
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cao Menu Contador') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cao-menu-contadors.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Co Menu</th>
										<th>Nu Pontos</th>
										<th>In Processado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($caoMenuContadors as $caoMenuContador)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $caoMenuContador->co_usuario }}</td>
											<td>{{ $caoMenuContador->co_menu }}</td>
											<td>{{ $caoMenuContador->nu_pontos }}</td>
											<td>{{ $caoMenuContador->in_processado }}</td>

                                            <td>
                                                <form action="{{ route('cao-menu-contadors.destroy',$caoMenuContador->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cao-menu-contadors.show',$caoMenuContador->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cao-menu-contadors.edit',$caoMenuContador->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $caoMenuContadors->links() !!}
            </div>
        </div>
    </div>
@endsection
