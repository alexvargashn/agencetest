@extends('layouts.app')

@section('template_title')
    Cao Rel Email O
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cao Rel Email O') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cao-rel-email-os.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Co Email</th>
										<th>Co Os</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($caoRelEmailOs as $caoRelEmailO)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $caoRelEmailO->co_email }}</td>
											<td>{{ $caoRelEmailO->co_os }}</td>

                                            <td>
                                                <form action="{{ route('cao-rel-email-os.destroy',$caoRelEmailO->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cao-rel-email-os.show',$caoRelEmailO->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cao-rel-email-os.edit',$caoRelEmailO->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $caoRelEmailOs->links() !!}
            </div>
        </div>
    </div>
@endsection
