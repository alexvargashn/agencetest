@extends('layouts.app')

@section('template_title')
    Cao Usuario
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cao Usuario') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cao-usuarios.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>No Usuario</th>
										<th>Ds Senha</th>
										<th>Co Usuario Autorizacao</th>
										<th>Nu Matricula</th>
										<th>Dt Nascimento</th>
										<th>Dt Admissao Empresa</th>
										<th>Dt Desligamento</th>
										<th>Dt Inclusao</th>
										<th>Dt Expiracao</th>
										<th>Nu Cpf</th>
										<th>Nu Rg</th>
										<th>No Orgao Emissor</th>
										<th>Uf Orgao Emissor</th>
										<th>Ds Endereco</th>
										<th>No Email</th>
										<th>No Email Pessoal</th>
										<th>Nu Telefone</th>
										<th>Dt Alteracao</th>
										<th>Url Foto</th>
										<th>Instant Messenger</th>
										<th>Icq</th>
										<th>Msn</th>
										<th>Yms</th>
										<th>Ds Comp End</th>
										<th>Ds Bairro</th>
										<th>Nu Cep</th>
										<th>No Cidade</th>
										<th>Uf Cidade</th>
										<th>Dt Expedicao</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($caoUsuarios as $caoUsuario)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $caoUsuario->co_usuario }}</td>
											<td>{{ $caoUsuario->no_usuario }}</td>
											<td>{{ $caoUsuario->ds_senha }}</td>
											<td>{{ $caoUsuario->co_usuario_autorizacao }}</td>
											<td>{{ $caoUsuario->nu_matricula }}</td>
											<td>{{ $caoUsuario->dt_nascimento }}</td>
											<td>{{ $caoUsuario->dt_admissao_empresa }}</td>
											<td>{{ $caoUsuario->dt_desligamento }}</td>
											<td>{{ $caoUsuario->dt_inclusao }}</td>
											<td>{{ $caoUsuario->dt_expiracao }}</td>
											<td>{{ $caoUsuario->nu_cpf }}</td>
											<td>{{ $caoUsuario->nu_rg }}</td>
											<td>{{ $caoUsuario->no_orgao_emissor }}</td>
											<td>{{ $caoUsuario->uf_orgao_emissor }}</td>
											<td>{{ $caoUsuario->ds_endereco }}</td>
											<td>{{ $caoUsuario->no_email }}</td>
											<td>{{ $caoUsuario->no_email_pessoal }}</td>
											<td>{{ $caoUsuario->nu_telefone }}</td>
											<td>{{ $caoUsuario->dt_alteracao }}</td>
											<td>{{ $caoUsuario->url_foto }}</td>
											<td>{{ $caoUsuario->instant_messenger }}</td>
											<td>{{ $caoUsuario->icq }}</td>
											<td>{{ $caoUsuario->msn }}</td>
											<td>{{ $caoUsuario->yms }}</td>
											<td>{{ $caoUsuario->ds_comp_end }}</td>
											<td>{{ $caoUsuario->ds_bairro }}</td>
											<td>{{ $caoUsuario->nu_cep }}</td>
											<td>{{ $caoUsuario->no_cidade }}</td>
											<td>{{ $caoUsuario->uf_cidade }}</td>
											<td>{{ $caoUsuario->dt_expedicao }}</td>

                                            <td>
                                                <form action="{{ route('cao-usuarios.destroy',$caoUsuario->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cao-usuarios.show',$caoUsuario->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cao-usuarios.edit',$caoUsuario->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $caoUsuarios->links() !!}
            </div>
        </div>
    </div>
@endsection
