@extends('layouts.app')

@section('template_title')
    Cao Noticium
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cao Noticium') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cao-noticia.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Co Noticia</th>
										<th>Assunto</th>
										<th>Descricao</th>
										<th>Foto</th>
										<th>Co Usuario</th>
										<th>Dt Noticia</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($caoNoticia as $caoNoticium)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $caoNoticium->co_noticia }}</td>
											<td>{{ $caoNoticium->assunto }}</td>
											<td>{{ $caoNoticium->descricao }}</td>
											<td>{{ $caoNoticium->foto }}</td>
											<td>{{ $caoNoticium->co_usuario }}</td>
											<td>{{ $caoNoticium->dt_noticia }}</td>

                                            <td>
                                                <form action="{{ route('cao-noticia.destroy',$caoNoticium->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cao-noticia.show',$caoNoticium->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cao-noticia.edit',$caoNoticium->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $caoNoticia->links() !!}
            </div>
        </div>
    </div>
@endsection
