@extends('layouts.app')

@section('template_title')
    Cao Pontos Conhecimento
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cao Pontos Conhecimento') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cao-pontos-conhecimentos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Idpontos</th>
										<th>Pontuacao</th>
										<th>Co Coordenador</th>
										<th>Idconhecimento</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($caoPontosConhecimentos as $caoPontosConhecimento)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $caoPontosConhecimento->idpontos }}</td>
											<td>{{ $caoPontosConhecimento->pontuacao }}</td>
											<td>{{ $caoPontosConhecimento->co_coordenador }}</td>
											<td>{{ $caoPontosConhecimento->idconhecimento }}</td>

                                            <td>
                                                <form action="{{ route('cao-pontos-conhecimentos.destroy',$caoPontosConhecimento->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cao-pontos-conhecimentos.show',$caoPontosConhecimento->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cao-pontos-conhecimentos.edit',$caoPontosConhecimento->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $caoPontosConhecimentos->links() !!}
            </div>
        </div>
    </div>
@endsection
