@extends('layouts.app')

@section('template_title')
    Cao Documentacao Outro
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cao Documentacao Outro') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cao-documentacao-outros.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Nome</th>
										<th>Co Sistema</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($caoDocumentacaoOutros as $caoDocumentacaoOutro)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $caoDocumentacaoOutro->nome }}</td>
											<td>{{ $caoDocumentacaoOutro->co_sistema }}</td>

                                            <td>
                                                <form action="{{ route('cao-documentacao-outros.destroy',$caoDocumentacaoOutro->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cao-documentacao-outros.show',$caoDocumentacaoOutro->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cao-documentacao-outros.edit',$caoDocumentacaoOutro->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $caoDocumentacaoOutros->links() !!}
            </div>
        </div>
    </div>
@endsection
