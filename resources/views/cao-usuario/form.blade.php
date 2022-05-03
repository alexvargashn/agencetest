<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('co_usuario') }}
            {{ Form::text('co_usuario', $caoUsuario->co_usuario, ['class' => 'form-control' . ($errors->has('co_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Co Usuario']) }}
            {!! $errors->first('co_usuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('no_usuario') }}
            {{ Form::text('no_usuario', $caoUsuario->no_usuario, ['class' => 'form-control' . ($errors->has('no_usuario') ? ' is-invalid' : ''), 'placeholder' => 'No Usuario']) }}
            {!! $errors->first('no_usuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ds_senha') }}
            {{ Form::text('ds_senha', $caoUsuario->ds_senha, ['class' => 'form-control' . ($errors->has('ds_senha') ? ' is-invalid' : ''), 'placeholder' => 'Ds Senha']) }}
            {!! $errors->first('ds_senha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_usuario_autorizacao') }}
            {{ Form::text('co_usuario_autorizacao', $caoUsuario->co_usuario_autorizacao, ['class' => 'form-control' . ($errors->has('co_usuario_autorizacao') ? ' is-invalid' : ''), 'placeholder' => 'Co Usuario Autorizacao']) }}
            {!! $errors->first('co_usuario_autorizacao', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nu_matricula') }}
            {{ Form::text('nu_matricula', $caoUsuario->nu_matricula, ['class' => 'form-control' . ($errors->has('nu_matricula') ? ' is-invalid' : ''), 'placeholder' => 'Nu Matricula']) }}
            {!! $errors->first('nu_matricula', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dt_nascimento') }}
            {{ Form::text('dt_nascimento', $caoUsuario->dt_nascimento, ['class' => 'form-control' . ($errors->has('dt_nascimento') ? ' is-invalid' : ''), 'placeholder' => 'Dt Nascimento']) }}
            {!! $errors->first('dt_nascimento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dt_admissao_empresa') }}
            {{ Form::text('dt_admissao_empresa', $caoUsuario->dt_admissao_empresa, ['class' => 'form-control' . ($errors->has('dt_admissao_empresa') ? ' is-invalid' : ''), 'placeholder' => 'Dt Admissao Empresa']) }}
            {!! $errors->first('dt_admissao_empresa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dt_desligamento') }}
            {{ Form::text('dt_desligamento', $caoUsuario->dt_desligamento, ['class' => 'form-control' . ($errors->has('dt_desligamento') ? ' is-invalid' : ''), 'placeholder' => 'Dt Desligamento']) }}
            {!! $errors->first('dt_desligamento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dt_inclusao') }}
            {{ Form::text('dt_inclusao', $caoUsuario->dt_inclusao, ['class' => 'form-control' . ($errors->has('dt_inclusao') ? ' is-invalid' : ''), 'placeholder' => 'Dt Inclusao']) }}
            {!! $errors->first('dt_inclusao', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dt_expiracao') }}
            {{ Form::text('dt_expiracao', $caoUsuario->dt_expiracao, ['class' => 'form-control' . ($errors->has('dt_expiracao') ? ' is-invalid' : ''), 'placeholder' => 'Dt Expiracao']) }}
            {!! $errors->first('dt_expiracao', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nu_cpf') }}
            {{ Form::text('nu_cpf', $caoUsuario->nu_cpf, ['class' => 'form-control' . ($errors->has('nu_cpf') ? ' is-invalid' : ''), 'placeholder' => 'Nu Cpf']) }}
            {!! $errors->first('nu_cpf', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nu_rg') }}
            {{ Form::text('nu_rg', $caoUsuario->nu_rg, ['class' => 'form-control' . ($errors->has('nu_rg') ? ' is-invalid' : ''), 'placeholder' => 'Nu Rg']) }}
            {!! $errors->first('nu_rg', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('no_orgao_emissor') }}
            {{ Form::text('no_orgao_emissor', $caoUsuario->no_orgao_emissor, ['class' => 'form-control' . ($errors->has('no_orgao_emissor') ? ' is-invalid' : ''), 'placeholder' => 'No Orgao Emissor']) }}
            {!! $errors->first('no_orgao_emissor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('uf_orgao_emissor') }}
            {{ Form::text('uf_orgao_emissor', $caoUsuario->uf_orgao_emissor, ['class' => 'form-control' . ($errors->has('uf_orgao_emissor') ? ' is-invalid' : ''), 'placeholder' => 'Uf Orgao Emissor']) }}
            {!! $errors->first('uf_orgao_emissor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ds_endereco') }}
            {{ Form::text('ds_endereco', $caoUsuario->ds_endereco, ['class' => 'form-control' . ($errors->has('ds_endereco') ? ' is-invalid' : ''), 'placeholder' => 'Ds Endereco']) }}
            {!! $errors->first('ds_endereco', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('no_email') }}
            {{ Form::text('no_email', $caoUsuario->no_email, ['class' => 'form-control' . ($errors->has('no_email') ? ' is-invalid' : ''), 'placeholder' => 'No Email']) }}
            {!! $errors->first('no_email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('no_email_pessoal') }}
            {{ Form::text('no_email_pessoal', $caoUsuario->no_email_pessoal, ['class' => 'form-control' . ($errors->has('no_email_pessoal') ? ' is-invalid' : ''), 'placeholder' => 'No Email Pessoal']) }}
            {!! $errors->first('no_email_pessoal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nu_telefone') }}
            {{ Form::text('nu_telefone', $caoUsuario->nu_telefone, ['class' => 'form-control' . ($errors->has('nu_telefone') ? ' is-invalid' : ''), 'placeholder' => 'Nu Telefone']) }}
            {!! $errors->first('nu_telefone', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dt_alteracao') }}
            {{ Form::text('dt_alteracao', $caoUsuario->dt_alteracao, ['class' => 'form-control' . ($errors->has('dt_alteracao') ? ' is-invalid' : ''), 'placeholder' => 'Dt Alteracao']) }}
            {!! $errors->first('dt_alteracao', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('url_foto') }}
            {{ Form::text('url_foto', $caoUsuario->url_foto, ['class' => 'form-control' . ($errors->has('url_foto') ? ' is-invalid' : ''), 'placeholder' => 'Url Foto']) }}
            {!! $errors->first('url_foto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('instant_messenger') }}
            {{ Form::text('instant_messenger', $caoUsuario->instant_messenger, ['class' => 'form-control' . ($errors->has('instant_messenger') ? ' is-invalid' : ''), 'placeholder' => 'Instant Messenger']) }}
            {!! $errors->first('instant_messenger', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('icq') }}
            {{ Form::text('icq', $caoUsuario->icq, ['class' => 'form-control' . ($errors->has('icq') ? ' is-invalid' : ''), 'placeholder' => 'Icq']) }}
            {!! $errors->first('icq', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('msn') }}
            {{ Form::text('msn', $caoUsuario->msn, ['class' => 'form-control' . ($errors->has('msn') ? ' is-invalid' : ''), 'placeholder' => 'Msn']) }}
            {!! $errors->first('msn', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('yms') }}
            {{ Form::text('yms', $caoUsuario->yms, ['class' => 'form-control' . ($errors->has('yms') ? ' is-invalid' : ''), 'placeholder' => 'Yms']) }}
            {!! $errors->first('yms', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ds_comp_end') }}
            {{ Form::text('ds_comp_end', $caoUsuario->ds_comp_end, ['class' => 'form-control' . ($errors->has('ds_comp_end') ? ' is-invalid' : ''), 'placeholder' => 'Ds Comp End']) }}
            {!! $errors->first('ds_comp_end', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ds_bairro') }}
            {{ Form::text('ds_bairro', $caoUsuario->ds_bairro, ['class' => 'form-control' . ($errors->has('ds_bairro') ? ' is-invalid' : ''), 'placeholder' => 'Ds Bairro']) }}
            {!! $errors->first('ds_bairro', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nu_cep') }}
            {{ Form::text('nu_cep', $caoUsuario->nu_cep, ['class' => 'form-control' . ($errors->has('nu_cep') ? ' is-invalid' : ''), 'placeholder' => 'Nu Cep']) }}
            {!! $errors->first('nu_cep', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('no_cidade') }}
            {{ Form::text('no_cidade', $caoUsuario->no_cidade, ['class' => 'form-control' . ($errors->has('no_cidade') ? ' is-invalid' : ''), 'placeholder' => 'No Cidade']) }}
            {!! $errors->first('no_cidade', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('uf_cidade') }}
            {{ Form::text('uf_cidade', $caoUsuario->uf_cidade, ['class' => 'form-control' . ($errors->has('uf_cidade') ? ' is-invalid' : ''), 'placeholder' => 'Uf Cidade']) }}
            {!! $errors->first('uf_cidade', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dt_expedicao') }}
            {{ Form::text('dt_expedicao', $caoUsuario->dt_expedicao, ['class' => 'form-control' . ($errors->has('dt_expedicao') ? ' is-invalid' : ''), 'placeholder' => 'Dt Expedicao']) }}
            {!! $errors->first('dt_expedicao', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>