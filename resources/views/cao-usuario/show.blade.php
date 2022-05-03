@extends('layouts.app')

@section('template_title')
    {{ $caoUsuario->name ?? 'Show Cao Usuario' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cao Usuario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cao-usuarios.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Co Usuario:</strong>
                            {{ $caoUsuario->co_usuario }}
                        </div>
                        <div class="form-group">
                            <strong>No Usuario:</strong>
                            {{ $caoUsuario->no_usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Ds Senha:</strong>
                            {{ $caoUsuario->ds_senha }}
                        </div>
                        <div class="form-group">
                            <strong>Co Usuario Autorizacao:</strong>
                            {{ $caoUsuario->co_usuario_autorizacao }}
                        </div>
                        <div class="form-group">
                            <strong>Nu Matricula:</strong>
                            {{ $caoUsuario->nu_matricula }}
                        </div>
                        <div class="form-group">
                            <strong>Dt Nascimento:</strong>
                            {{ $caoUsuario->dt_nascimento }}
                        </div>
                        <div class="form-group">
                            <strong>Dt Admissao Empresa:</strong>
                            {{ $caoUsuario->dt_admissao_empresa }}
                        </div>
                        <div class="form-group">
                            <strong>Dt Desligamento:</strong>
                            {{ $caoUsuario->dt_desligamento }}
                        </div>
                        <div class="form-group">
                            <strong>Dt Inclusao:</strong>
                            {{ $caoUsuario->dt_inclusao }}
                        </div>
                        <div class="form-group">
                            <strong>Dt Expiracao:</strong>
                            {{ $caoUsuario->dt_expiracao }}
                        </div>
                        <div class="form-group">
                            <strong>Nu Cpf:</strong>
                            {{ $caoUsuario->nu_cpf }}
                        </div>
                        <div class="form-group">
                            <strong>Nu Rg:</strong>
                            {{ $caoUsuario->nu_rg }}
                        </div>
                        <div class="form-group">
                            <strong>No Orgao Emissor:</strong>
                            {{ $caoUsuario->no_orgao_emissor }}
                        </div>
                        <div class="form-group">
                            <strong>Uf Orgao Emissor:</strong>
                            {{ $caoUsuario->uf_orgao_emissor }}
                        </div>
                        <div class="form-group">
                            <strong>Ds Endereco:</strong>
                            {{ $caoUsuario->ds_endereco }}
                        </div>
                        <div class="form-group">
                            <strong>No Email:</strong>
                            {{ $caoUsuario->no_email }}
                        </div>
                        <div class="form-group">
                            <strong>No Email Pessoal:</strong>
                            {{ $caoUsuario->no_email_pessoal }}
                        </div>
                        <div class="form-group">
                            <strong>Nu Telefone:</strong>
                            {{ $caoUsuario->nu_telefone }}
                        </div>
                        <div class="form-group">
                            <strong>Dt Alteracao:</strong>
                            {{ $caoUsuario->dt_alteracao }}
                        </div>
                        <div class="form-group">
                            <strong>Url Foto:</strong>
                            {{ $caoUsuario->url_foto }}
                        </div>
                        <div class="form-group">
                            <strong>Instant Messenger:</strong>
                            {{ $caoUsuario->instant_messenger }}
                        </div>
                        <div class="form-group">
                            <strong>Icq:</strong>
                            {{ $caoUsuario->icq }}
                        </div>
                        <div class="form-group">
                            <strong>Msn:</strong>
                            {{ $caoUsuario->msn }}
                        </div>
                        <div class="form-group">
                            <strong>Yms:</strong>
                            {{ $caoUsuario->yms }}
                        </div>
                        <div class="form-group">
                            <strong>Ds Comp End:</strong>
                            {{ $caoUsuario->ds_comp_end }}
                        </div>
                        <div class="form-group">
                            <strong>Ds Bairro:</strong>
                            {{ $caoUsuario->ds_bairro }}
                        </div>
                        <div class="form-group">
                            <strong>Nu Cep:</strong>
                            {{ $caoUsuario->nu_cep }}
                        </div>
                        <div class="form-group">
                            <strong>No Cidade:</strong>
                            {{ $caoUsuario->no_cidade }}
                        </div>
                        <div class="form-group">
                            <strong>Uf Cidade:</strong>
                            {{ $caoUsuario->uf_cidade }}
                        </div>
                        <div class="form-group">
                            <strong>Dt Expedicao:</strong>
                            {{ $caoUsuario->dt_expedicao }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
