@extends('layouts.app')

@section('template_title')
    Cao Horario Almoco
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cao Horario Almoco') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cao-horario-almocos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Co Usuario</th>
										<th>Almoco Saida Hora</th>
										<th>Almoco Volta Hora</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($caoHorarioAlmocos as $caoHorarioAlmoco)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $caoHorarioAlmoco->co_usuario }}</td>
											<td>{{ $caoHorarioAlmoco->almoco_saida_hora }}</td>
											<td>{{ $caoHorarioAlmoco->almoco_volta_hora }}</td>

                                            <td>
                                                <form action="{{ route('cao-horario-almocos.destroy',$caoHorarioAlmoco->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cao-horario-almocos.show',$caoHorarioAlmoco->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cao-horario-almocos.edit',$caoHorarioAlmoco->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $caoHorarioAlmocos->links() !!}
            </div>
        </div>
    </div>
@endsection
