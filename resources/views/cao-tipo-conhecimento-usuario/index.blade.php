@extends('layouts.app')

@section('template_title')
    Cao Tipo Conhecimento Usuario
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cao Tipo Conhecimento Usuario') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cao-tipo-conhecimento-usuarios.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Co Conhecimento</th>
										<th>Ds Conhecimento</th>
										<th>Co Sistema</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($caoTipoConhecimentoUsuarios as $caoTipoConhecimentoUsuario)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $caoTipoConhecimentoUsuario->co_conhecimento }}</td>
											<td>{{ $caoTipoConhecimentoUsuario->ds_conhecimento }}</td>
											<td>{{ $caoTipoConhecimentoUsuario->co_sistema }}</td>

                                            <td>
                                                <form action="{{ route('cao-tipo-conhecimento-usuarios.destroy',$caoTipoConhecimentoUsuario->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cao-tipo-conhecimento-usuarios.show',$caoTipoConhecimentoUsuario->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cao-tipo-conhecimento-usuarios.edit',$caoTipoConhecimentoUsuario->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $caoTipoConhecimentoUsuarios->links() !!}
            </div>
        </div>
    </div>
@endsection
