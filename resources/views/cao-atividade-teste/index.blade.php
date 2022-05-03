@extends('layouts.app')

@section('template_title')
    Cao Atividade Teste
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cao Atividade Teste') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cao-atividade-testes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Co Atividade</th>
										<th>Ds Atividade</th>
										<th>Co Tipo Usuario</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($caoAtividadeTestes as $caoAtividadeTeste)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $caoAtividadeTeste->co_atividade }}</td>
											<td>{{ $caoAtividadeTeste->ds_atividade }}</td>
											<td>{{ $caoAtividadeTeste->co_tipo_usuario }}</td>

                                            <td>
                                                <form action="{{ route('cao-atividade-testes.destroy',$caoAtividadeTeste->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cao-atividade-testes.show',$caoAtividadeTeste->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cao-atividade-testes.edit',$caoAtividadeTeste->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $caoAtividadeTestes->links() !!}
            </div>
        </div>
    </div>
@endsection
