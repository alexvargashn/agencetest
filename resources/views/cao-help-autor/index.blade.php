@extends('layouts.app')

@section('template_title')
    Cao Help Autor
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cao Help Autor') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cao-help-autors.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Co Autor</th>
										<th>No Autor</th>
										<th>Co Filial</th>
										<th>Nu Ddd1</th>
										<th>Nu Tel1</th>
										<th>Nu Ramal1</th>
										<th>Nu Ddd2</th>
										<th>Nu Tel2</th>
										<th>Nu Ramal2</th>
										<th>Ds Email</th>
										<th>Ds Funcao</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($caoHelpAutors as $caoHelpAutor)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $caoHelpAutor->co_autor }}</td>
											<td>{{ $caoHelpAutor->no_autor }}</td>
											<td>{{ $caoHelpAutor->co_filial }}</td>
											<td>{{ $caoHelpAutor->nu_ddd1 }}</td>
											<td>{{ $caoHelpAutor->nu_tel1 }}</td>
											<td>{{ $caoHelpAutor->nu_ramal1 }}</td>
											<td>{{ $caoHelpAutor->nu_ddd2 }}</td>
											<td>{{ $caoHelpAutor->nu_tel2 }}</td>
											<td>{{ $caoHelpAutor->nu_ramal2 }}</td>
											<td>{{ $caoHelpAutor->ds_email }}</td>
											<td>{{ $caoHelpAutor->ds_funcao }}</td>

                                            <td>
                                                <form action="{{ route('cao-help-autors.destroy',$caoHelpAutor->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cao-help-autors.show',$caoHelpAutor->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cao-help-autors.edit',$caoHelpAutor->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $caoHelpAutors->links() !!}
            </div>
        </div>
    </div>
@endsection
