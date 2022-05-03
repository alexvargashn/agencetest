@extends('layouts.app')

@section('template_title')
    Cao Help Tela Chamado
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cao Help Tela Chamado') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cao-help-tela-chamados.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Co Tela</th>
										<th>Co Cliente</th>
										<th>Co Sistema</th>
										<th>Ds Tela</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($caoHelpTelaChamados as $caoHelpTelaChamado)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $caoHelpTelaChamado->co_tela }}</td>
											<td>{{ $caoHelpTelaChamado->co_cliente }}</td>
											<td>{{ $caoHelpTelaChamado->co_sistema }}</td>
											<td>{{ $caoHelpTelaChamado->ds_tela }}</td>

                                            <td>
                                                <form action="{{ route('cao-help-tela-chamados.destroy',$caoHelpTelaChamado->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cao-help-tela-chamados.show',$caoHelpTelaChamado->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cao-help-tela-chamados.edit',$caoHelpTelaChamado->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $caoHelpTelaChamados->links() !!}
            </div>
        </div>
    </div>
@endsection
