@extends('layouts.app')

@section('template_title')
    Cao Cliente
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cao Cliente') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cao-clientes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Co Cliente</th>
										<th>No Razao</th>
										<th>No Fantasia</th>
										<th>No Contato</th>
										<th>Nu Telefone</th>
										<th>Nu Ramal</th>
										<th>Nu Cnpj</th>
										<th>Ds Endereco</th>
										<th>Nu Numero</th>
										<th>Ds Complemento</th>
										<th>No Bairro</th>
										<th>Nu Cep</th>
										<th>No Pais</th>
										<th>Co Ramo</th>
										<th>Co Cidade</th>
										<th>Co Status</th>
										<th>Ds Site</th>
										<th>Ds Email</th>
										<th>Ds Cargo Contato</th>
										<th>Tp Cliente</th>
										<th>Ds Referencia</th>
										<th>Co Complemento Status</th>
										<th>Nu Fax</th>
										<th>Ddd2</th>
										<th>Telefone2</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($caoClientes as $caoCliente)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $caoCliente->co_cliente }}</td>
											<td>{{ $caoCliente->no_razao }}</td>
											<td>{{ $caoCliente->no_fantasia }}</td>
											<td>{{ $caoCliente->no_contato }}</td>
											<td>{{ $caoCliente->nu_telefone }}</td>
											<td>{{ $caoCliente->nu_ramal }}</td>
											<td>{{ $caoCliente->nu_cnpj }}</td>
											<td>{{ $caoCliente->ds_endereco }}</td>
											<td>{{ $caoCliente->nu_numero }}</td>
											<td>{{ $caoCliente->ds_complemento }}</td>
											<td>{{ $caoCliente->no_bairro }}</td>
											<td>{{ $caoCliente->nu_cep }}</td>
											<td>{{ $caoCliente->no_pais }}</td>
											<td>{{ $caoCliente->co_ramo }}</td>
											<td>{{ $caoCliente->co_cidade }}</td>
											<td>{{ $caoCliente->co_status }}</td>
											<td>{{ $caoCliente->ds_site }}</td>
											<td>{{ $caoCliente->ds_email }}</td>
											<td>{{ $caoCliente->ds_cargo_contato }}</td>
											<td>{{ $caoCliente->tp_cliente }}</td>
											<td>{{ $caoCliente->ds_referencia }}</td>
											<td>{{ $caoCliente->co_complemento_status }}</td>
											<td>{{ $caoCliente->nu_fax }}</td>
											<td>{{ $caoCliente->ddd2 }}</td>
											<td>{{ $caoCliente->telefone2 }}</td>

                                            <td>
                                                <form action="{{ route('cao-clientes.destroy',$caoCliente->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cao-clientes.show',$caoCliente->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cao-clientes.edit',$caoCliente->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $caoClientes->links() !!}
            </div>
        </div>
    </div>
@endsection
