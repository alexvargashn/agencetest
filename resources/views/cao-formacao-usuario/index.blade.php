@extends('layouts.app')

@section('template_title')
    Cao Formacao Usuario
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cao Formacao Usuario') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cao-formacao-usuarios.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Tp Curso</th>
										<th>Ds Curso</th>
										<th>Ds Instituicao</th>
										<th>Dt Conclusao</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($caoFormacaoUsuarios as $caoFormacaoUsuario)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $caoFormacaoUsuario->co_usuario }}</td>
											<td>{{ $caoFormacaoUsuario->tp_curso }}</td>
											<td>{{ $caoFormacaoUsuario->ds_curso }}</td>
											<td>{{ $caoFormacaoUsuario->ds_instituicao }}</td>
											<td>{{ $caoFormacaoUsuario->dt_conclusao }}</td>

                                            <td>
                                                <form action="{{ route('cao-formacao-usuarios.destroy',$caoFormacaoUsuario->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cao-formacao-usuarios.show',$caoFormacaoUsuario->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cao-formacao-usuarios.edit',$caoFormacaoUsuario->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $caoFormacaoUsuarios->links() !!}
            </div>
        </div>
    </div>
@endsection
