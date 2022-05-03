@extends('layouts.app')

@section('template_title')
    Cao Movimento Justificativa
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cao Movimento Justificativa') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cao-movimento-justificativas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Co Movimento Justificativa</th>
										<th>Co Movimento</th>
										<th>Nu Os</th>
										<th>Ds Justificativa</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($caoMovimentoJustificativas as $caoMovimentoJustificativa)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $caoMovimentoJustificativa->co_movimento_justificativa }}</td>
											<td>{{ $caoMovimentoJustificativa->co_movimento }}</td>
											<td>{{ $caoMovimentoJustificativa->nu_os }}</td>
											<td>{{ $caoMovimentoJustificativa->ds_justificativa }}</td>

                                            <td>
                                                <form action="{{ route('cao-movimento-justificativas.destroy',$caoMovimentoJustificativa->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cao-movimento-justificativas.show',$caoMovimentoJustificativa->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cao-movimento-justificativas.edit',$caoMovimentoJustificativa->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $caoMovimentoJustificativas->links() !!}
            </div>
        </div>
    </div>
@endsection
