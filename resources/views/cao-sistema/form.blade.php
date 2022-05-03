<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('co_sistema') }}
            {{ Form::text('co_sistema', $caoSistema->co_sistema, ['class' => 'form-control' . ($errors->has('co_sistema') ? ' is-invalid' : ''), 'placeholder' => 'Co Sistema']) }}
            {!! $errors->first('co_sistema', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_cliente') }}
            {{ Form::text('co_cliente', $caoSistema->co_cliente, ['class' => 'form-control' . ($errors->has('co_cliente') ? ' is-invalid' : ''), 'placeholder' => 'Co Cliente']) }}
            {!! $errors->first('co_cliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_usuario') }}
            {{ Form::text('co_usuario', $caoSistema->co_usuario, ['class' => 'form-control' . ($errors->has('co_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Co Usuario']) }}
            {!! $errors->first('co_usuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_arquitetura') }}
            {{ Form::text('co_arquitetura', $caoSistema->co_arquitetura, ['class' => 'form-control' . ($errors->has('co_arquitetura') ? ' is-invalid' : ''), 'placeholder' => 'Co Arquitetura']) }}
            {!! $errors->first('co_arquitetura', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('no_sistema') }}
            {{ Form::text('no_sistema', $caoSistema->no_sistema, ['class' => 'form-control' . ($errors->has('no_sistema') ? ' is-invalid' : ''), 'placeholder' => 'No Sistema']) }}
            {!! $errors->first('no_sistema', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ds_sistema_resumo') }}
            {{ Form::text('ds_sistema_resumo', $caoSistema->ds_sistema_resumo, ['class' => 'form-control' . ($errors->has('ds_sistema_resumo') ? ' is-invalid' : ''), 'placeholder' => 'Ds Sistema Resumo']) }}
            {!! $errors->first('ds_sistema_resumo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ds_caracteristica') }}
            {{ Form::text('ds_caracteristica', $caoSistema->ds_caracteristica, ['class' => 'form-control' . ($errors->has('ds_caracteristica') ? ' is-invalid' : ''), 'placeholder' => 'Ds Caracteristica']) }}
            {!! $errors->first('ds_caracteristica', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ds_requisito') }}
            {{ Form::text('ds_requisito', $caoSistema->ds_requisito, ['class' => 'form-control' . ($errors->has('ds_requisito') ? ' is-invalid' : ''), 'placeholder' => 'Ds Requisito']) }}
            {!! $errors->first('ds_requisito', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('no_diretoria_solic') }}
            {{ Form::text('no_diretoria_solic', $caoSistema->no_diretoria_solic, ['class' => 'form-control' . ($errors->has('no_diretoria_solic') ? ' is-invalid' : ''), 'placeholder' => 'No Diretoria Solic']) }}
            {!! $errors->first('no_diretoria_solic', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ddd_telefone_solic') }}
            {{ Form::text('ddd_telefone_solic', $caoSistema->ddd_telefone_solic, ['class' => 'form-control' . ($errors->has('ddd_telefone_solic') ? ' is-invalid' : ''), 'placeholder' => 'Ddd Telefone Solic']) }}
            {!! $errors->first('ddd_telefone_solic', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nu_telefone_solic') }}
            {{ Form::text('nu_telefone_solic', $caoSistema->nu_telefone_solic, ['class' => 'form-control' . ($errors->has('nu_telefone_solic') ? ' is-invalid' : ''), 'placeholder' => 'Nu Telefone Solic']) }}
            {!! $errors->first('nu_telefone_solic', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('no_usuario_solic') }}
            {{ Form::text('no_usuario_solic', $caoSistema->no_usuario_solic, ['class' => 'form-control' . ($errors->has('no_usuario_solic') ? ' is-invalid' : ''), 'placeholder' => 'No Usuario Solic']) }}
            {!! $errors->first('no_usuario_solic', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dt_solicitacao') }}
            {{ Form::text('dt_solicitacao', $caoSistema->dt_solicitacao, ['class' => 'form-control' . ($errors->has('dt_solicitacao') ? ' is-invalid' : ''), 'placeholder' => 'Dt Solicitacao']) }}
            {!! $errors->first('dt_solicitacao', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dt_entrega') }}
            {{ Form::text('dt_entrega', $caoSistema->dt_entrega, ['class' => 'form-control' . ($errors->has('dt_entrega') ? ' is-invalid' : ''), 'placeholder' => 'Dt Entrega']) }}
            {!! $errors->first('dt_entrega', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_email') }}
            {{ Form::text('co_email', $caoSistema->co_email, ['class' => 'form-control' . ($errors->has('co_email') ? ' is-invalid' : ''), 'placeholder' => 'Co Email']) }}
            {!! $errors->first('co_email', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>