@extends('layouts.app')

@section('template_title')
    Cao Conhecimentos Fonte
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cao Conhecimentos Fonte') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cao-conhecimentos-fontes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Idfonte</th>
										<th>Idconhecimento</th>
										<th>Datahora</th>
										<th>Arquivo</th>
										<th>Caminho</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($caoConhecimentosFontes as $caoConhecimentosFonte)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $caoConhecimentosFonte->idfonte }}</td>
											<td>{{ $caoConhecimentosFonte->idconhecimento }}</td>
											<td>{{ $caoConhecimentosFonte->datahora }}</td>
											<td>{{ $caoConhecimentosFonte->arquivo }}</td>
											<td>{{ $caoConhecimentosFonte->caminho }}</td>

                                            <td>
                                                <form action="{{ route('cao-conhecimentos-fontes.destroy',$caoConhecimentosFonte->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cao-conhecimentos-fontes.show',$caoConhecimentosFonte->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cao-conhecimentos-fontes.edit',$caoConhecimentosFonte->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $caoConhecimentosFontes->links() !!}
            </div>
        </div>
    </div>
@endsection
