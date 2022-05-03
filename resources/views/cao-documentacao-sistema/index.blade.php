@extends('layouts.app')

@section('template_title')
    Cao Documentacao Sistema
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cao Documentacao Sistema') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cao-documentacao-sistemas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Co Sistema</th>
										<th>Descricao</th>
										<th>Pasta</th>
										<th>Sub Grupo</th>
										<th>Co Usuario</th>
										<th>Dt Doc</th>
										<th>Arquivo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($caoDocumentacaoSistemas as $caoDocumentacaoSistema)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $caoDocumentacaoSistema->co_sistema }}</td>
											<td>{{ $caoDocumentacaoSistema->descricao }}</td>
											<td>{{ $caoDocumentacaoSistema->pasta }}</td>
											<td>{{ $caoDocumentacaoSistema->sub_grupo }}</td>
											<td>{{ $caoDocumentacaoSistema->co_usuario }}</td>
											<td>{{ $caoDocumentacaoSistema->dt_doc }}</td>
											<td>{{ $caoDocumentacaoSistema->arquivo }}</td>

                                            <td>
                                                <form action="{{ route('cao-documentacao-sistemas.destroy',$caoDocumentacaoSistema->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cao-documentacao-sistemas.show',$caoDocumentacaoSistema->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cao-documentacao-sistemas.edit',$caoDocumentacaoSistema->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $caoDocumentacaoSistemas->links() !!}
            </div>
        </div>
    </div>
@endsection
