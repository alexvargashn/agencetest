@extends('layouts.app')

@section('template_title')
    Cao Dr Ativ Comp
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cao Dr Ativ Comp') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cao-dr-ativ-comps.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Id Ativ Comp</th>
										<th>Co Usuario</th>
										<th>Data</th>
										<th>Assunto</th>
										<th>Tempo Gasto</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($caoDrAtivComps as $caoDrAtivComp)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $caoDrAtivComp->id_ativ_comp }}</td>
											<td>{{ $caoDrAtivComp->co_usuario }}</td>
											<td>{{ $caoDrAtivComp->data }}</td>
											<td>{{ $caoDrAtivComp->assunto }}</td>
											<td>{{ $caoDrAtivComp->tempo_gasto }}</td>

                                            <td>
                                                <form action="{{ route('cao-dr-ativ-comps.destroy',$caoDrAtivComp->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cao-dr-ativ-comps.show',$caoDrAtivComp->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cao-dr-ativ-comps.edit',$caoDrAtivComp->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $caoDrAtivComps->links() !!}
            </div>
        </div>
    </div>
@endsection