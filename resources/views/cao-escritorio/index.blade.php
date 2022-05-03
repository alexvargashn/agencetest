@extends('layouts.app')

@section('template_title')
    Cao Escritorio
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cao Escritorio') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cao-escritorios.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Co Escritorio</th>
										<th>Local</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($caoEscritorios as $caoEscritorio)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $caoEscritorio->co_escritorio }}</td>
											<td>{{ $caoEscritorio->local }}</td>

                                            <td>
                                                <form action="{{ route('cao-escritorios.destroy',$caoEscritorio->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cao-escritorios.show',$caoEscritorio->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cao-escritorios.edit',$caoEscritorio->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $caoEscritorios->links() !!}
            </div>
        </div>
    </div>
@endsection