@extends('layouts.app')

@section('template_title')
    Cao Tipo Idioma Usuario
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cao Tipo Idioma Usuario') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cao-tipo-idioma-usuarios.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Co Idioma</th>
										<th>Ds Idioma</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($caoTipoIdiomaUsuarios as $caoTipoIdiomaUsuario)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $caoTipoIdiomaUsuario->co_idioma }}</td>
											<td>{{ $caoTipoIdiomaUsuario->ds_idioma }}</td>

                                            <td>
                                                <form action="{{ route('cao-tipo-idioma-usuarios.destroy',$caoTipoIdiomaUsuario->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cao-tipo-idioma-usuarios.show',$caoTipoIdiomaUsuario->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cao-tipo-idioma-usuarios.edit',$caoTipoIdiomaUsuario->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $caoTipoIdiomaUsuarios->links() !!}
            </div>
        </div>
    </div>
@endsection
