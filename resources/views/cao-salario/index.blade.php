@extends('layouts.app')

@section('template_title')
    Cao Salario
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cao Salario') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cao-salarios.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Dt Alteracao</th>
										<th>Brut Salario</th>
										<th>Liq Salario</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($caoSalarios as $caoSalario)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $caoSalario->co_usuario }}</td>
											<td>{{ $caoSalario->dt_alteracao }}</td>
											<td>{{ $caoSalario->brut_salario }}</td>
											<td>{{ $caoSalario->liq_salario }}</td>

                                            <td>
                                                <form action="{{ route('cao-salarios.destroy',$caoSalario->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cao-salarios.show',$caoSalario->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cao-salarios.edit',$caoSalario->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $caoSalarios->links() !!}
            </div>
        </div>
    </div>
@endsection
