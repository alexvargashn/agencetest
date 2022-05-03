@extends('layouts.app')

@section('template_title')
    Cao Conhecimento Usuario
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cao Conhecimento Usuario') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cao-conhecimento-usuarios.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Co Conhecimento</th>
										<th>Nv Conhecimento</th>
										<th>Is Certificado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($caoConhecimentoUsuarios as $caoConhecimentoUsuario)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $caoConhecimentoUsuario->co_usuario }}</td>
											<td>{{ $caoConhecimentoUsuario->co_conhecimento }}</td>
											<td>{{ $caoConhecimentoUsuario->nv_conhecimento }}</td>
											<td>{{ $caoConhecimentoUsuario->is_certificado }}</td>

                                            <td>
                                                <form action="{{ route('cao-conhecimento-usuarios.destroy',$caoConhecimentoUsuario->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cao-conhecimento-usuarios.show',$caoConhecimentoUsuario->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cao-conhecimento-usuarios.edit',$caoConhecimentoUsuario->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $caoConhecimentoUsuarios->links() !!}
            </div>
        </div>
    </div>
@endsection
