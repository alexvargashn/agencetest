@extends('layouts.app')

@section('template_title')
    Cao Acompanhamento Sistema
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cao Acompanhamento Sistema') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cao-acompanhamento-sistemas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Co Acompanhamento</th>
										<th>Email</th>
										<th>Senha</th>
										<th>Co Sistema</th>
										<th>Status</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($caoAcompanhamentoSistemas as $caoAcompanhamentoSistema)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $caoAcompanhamentoSistema->co_acompanhamento }}</td>
											<td>{{ $caoAcompanhamentoSistema->email }}</td>
											<td>{{ $caoAcompanhamentoSistema->senha }}</td>
											<td>{{ $caoAcompanhamentoSistema->co_sistema }}</td>
											<td>{{ $caoAcompanhamentoSistema->status }}</td>

                                            <td>
                                                <form action="{{ route('cao-acompanhamento-sistemas.destroy',$caoAcompanhamentoSistema->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cao-acompanhamento-sistemas.show',$caoAcompanhamentoSistema->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cao-acompanhamento-sistemas.edit',$caoAcompanhamentoSistema->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $caoAcompanhamentoSistemas->links() !!}
            </div>
        </div>
    </div>
@endsection
