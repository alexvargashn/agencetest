@extends('layouts.app')

@section('template_title')
    Cao Formacao Idioma Usuario
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cao Formacao Idioma Usuario') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cao-formacao-idioma-usuarios.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Co Idioma</th>
										<th>Nv Leitura</th>
										<th>Nv Escrita</th>
										<th>Nv Fala</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($caoFormacaoIdiomaUsuarios as $caoFormacaoIdiomaUsuario)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $caoFormacaoIdiomaUsuario->co_usuario }}</td>
											<td>{{ $caoFormacaoIdiomaUsuario->co_idioma }}</td>
											<td>{{ $caoFormacaoIdiomaUsuario->nv_leitura }}</td>
											<td>{{ $caoFormacaoIdiomaUsuario->nv_escrita }}</td>
											<td>{{ $caoFormacaoIdiomaUsuario->nv_fala }}</td>

                                            <td>
                                                <form action="{{ route('cao-formacao-idioma-usuarios.destroy',$caoFormacaoIdiomaUsuario->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cao-formacao-idioma-usuarios.show',$caoFormacaoIdiomaUsuario->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cao-formacao-idioma-usuarios.edit',$caoFormacaoIdiomaUsuario->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $caoFormacaoIdiomaUsuarios->links() !!}
            </div>
        </div>
    </div>
@endsection
