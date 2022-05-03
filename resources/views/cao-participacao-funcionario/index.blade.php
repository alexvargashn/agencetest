@extends('layouts.app')

@section('template_title')
    Cao Participacao Funcionario
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cao Participacao Funcionario') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cao-participacao-funcionarios.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Co Part Funcionario</th>
										<th>Pc Participacao</th>
										<th>Co Usuario</th>
										<th>Co Escritorio</th>
										<th>Dt Referencia</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($caoParticipacaoFuncionarios as $caoParticipacaoFuncionario)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $caoParticipacaoFuncionario->co_part_funcionario }}</td>
											<td>{{ $caoParticipacaoFuncionario->pc_participacao }}</td>
											<td>{{ $caoParticipacaoFuncionario->co_usuario }}</td>
											<td>{{ $caoParticipacaoFuncionario->co_escritorio }}</td>
											<td>{{ $caoParticipacaoFuncionario->dt_referencia }}</td>

                                            <td>
                                                <form action="{{ route('cao-participacao-funcionarios.destroy',$caoParticipacaoFuncionario->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cao-participacao-funcionarios.show',$caoParticipacaoFuncionario->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cao-participacao-funcionarios.edit',$caoParticipacaoFuncionario->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $caoParticipacaoFuncionarios->links() !!}
            </div>
        </div>
    </div>
@endsection
