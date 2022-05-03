@extends('layouts.app')

@section('template_title')
    Cao Conhecimento
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cao Conhecimento') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cao-conhecimentos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Idconhecimento</th>
										<th>Assunto</th>
										<th>Conhecimento</th>
										<th>Url</th>
										<th>Tags</th>
										<th>Usuario</th>
										<th>Datahora</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($caoConhecimentos as $caoConhecimento)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $caoConhecimento->idconhecimento }}</td>
											<td>{{ $caoConhecimento->assunto }}</td>
											<td>{{ $caoConhecimento->conhecimento }}</td>
											<td>{{ $caoConhecimento->url }}</td>
											<td>{{ $caoConhecimento->tags }}</td>
											<td>{{ $caoConhecimento->usuario }}</td>
											<td>{{ $caoConhecimento->datahora }}</td>

                                            <td>
                                                <form action="{{ route('cao-conhecimentos.destroy',$caoConhecimento->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cao-conhecimentos.show',$caoConhecimento->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cao-conhecimentos.edit',$caoConhecimento->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $caoConhecimentos->links() !!}
            </div>
        </div>
    </div>
@endsection
