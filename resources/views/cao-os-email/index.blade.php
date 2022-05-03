@extends('layouts.app')

@section('template_title')
    Cao Os Email
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cao Os Email') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cao-os-emails.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Email</th>
										<th>Senha</th>
										<th>Nome</th>
										<th>Co Cliente</th>
										<th>Ativo</th>
										<th>Ddd</th>
										<th>Tel</th>
										<th>Cargo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($caoOsEmails as $caoOsEmail)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $caoOsEmail->co_email }}</td>
											<td>{{ $caoOsEmail->co_os }}</td>
											<td>{{ $caoOsEmail->email }}</td>
											<td>{{ $caoOsEmail->senha }}</td>
											<td>{{ $caoOsEmail->nome }}</td>
											<td>{{ $caoOsEmail->co_cliente }}</td>
											<td>{{ $caoOsEmail->ativo }}</td>
											<td>{{ $caoOsEmail->ddd }}</td>
											<td>{{ $caoOsEmail->tel }}</td>
											<td>{{ $caoOsEmail->cargo }}</td>

                                            <td>
                                                <form action="{{ route('cao-os-emails.destroy',$caoOsEmail->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cao-os-emails.show',$caoOsEmail->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cao-os-emails.edit',$caoOsEmail->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $caoOsEmails->links() !!}
            </div>
        </div>
    </div>
@endsection
