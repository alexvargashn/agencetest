@extends('layouts.app')

@section('template_title')
    Cao Uf
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cao Uf') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cao-ufs.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Co Uf</th>
										<th>Ds Uf</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($caoUfs as $caoUf)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $caoUf->co_uf }}</td>
											<td>{{ $caoUf->ds_uf }}</td>

                                            <td>
                                                <form action="{{ route('cao-ufs.destroy',$caoUf->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cao-ufs.show',$caoUf->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cao-ufs.edit',$caoUf->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $caoUfs->links() !!}
            </div>
        </div>
    </div>
@endsection
