<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('co_os') }}
            {{ Form::text('co_os', $caoO->co_os, ['class' => 'form-control' . ($errors->has('co_os') ? ' is-invalid' : ''), 'placeholder' => 'Co Os']) }}
            {!! $errors->first('co_os', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nu_os') }}
            {{ Form::text('nu_os', $caoO->nu_os, ['class' => 'form-control' . ($errors->has('nu_os') ? ' is-invalid' : ''), 'placeholder' => 'Nu Os']) }}
            {!! $errors->first('nu_os', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_sistema') }}
            {{ Form::text('co_sistema', $caoO->co_sistema, ['class' => 'form-control' . ($errors->has('co_sistema') ? ' is-invalid' : ''), 'placeholder' => 'Co Sistema']) }}
            {!! $errors->first('co_sistema', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_usuario') }}
            {{ Form::text('co_usuario', $caoO->co_usuario, ['class' => 'form-control' . ($errors->has('co_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Co Usuario']) }}
            {!! $errors->first('co_usuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_arquitetura') }}
            {{ Form::text('co_arquitetura', $caoO->co_arquitetura, ['class' => 'form-control' . ($errors->has('co_arquitetura') ? ' is-invalid' : ''), 'placeholder' => 'Co Arquitetura']) }}
            {!! $errors->first('co_arquitetura', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ds_os') }}
            {{ Form::text('ds_os', $caoO->ds_os, ['class' => 'form-control' . ($errors->has('ds_os') ? ' is-invalid' : ''), 'placeholder' => 'Ds Os']) }}
            {!! $errors->first('ds_os', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ds_caracteristica') }}
            {{ Form::text('ds_caracteristica', $caoO->ds_caracteristica, ['class' => 'form-control' . ($errors->has('ds_caracteristica') ? ' is-invalid' : ''), 'placeholder' => 'Ds Caracteristica']) }}
            {!! $errors->first('ds_caracteristica', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ds_requisito') }}
            {{ Form::text('ds_requisito', $caoO->ds_requisito, ['class' => 'form-control' . ($errors->has('ds_requisito') ? ' is-invalid' : ''), 'placeholder' => 'Ds Requisito']) }}
            {!! $errors->first('ds_requisito', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dt_inicio') }}
            {{ Form::text('dt_inicio', $caoO->dt_inicio, ['class' => 'form-control' . ($errors->has('dt_inicio') ? ' is-invalid' : ''), 'placeholder' => 'Dt Inicio']) }}
            {!! $errors->first('dt_inicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dt_fim') }}
            {{ Form::text('dt_fim', $caoO->dt_fim, ['class' => 'form-control' . ($errors->has('dt_fim') ? ' is-invalid' : ''), 'placeholder' => 'Dt Fim']) }}
            {!! $errors->first('dt_fim', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_status') }}
            {{ Form::text('co_status', $caoO->co_status, ['class' => 'form-control' . ($errors->has('co_status') ? ' is-invalid' : ''), 'placeholder' => 'Co Status']) }}
            {!! $errors->first('co_status', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('diretoria_sol') }}
            {{ Form::text('diretoria_sol', $caoO->diretoria_sol, ['class' => 'form-control' . ($errors->has('diretoria_sol') ? ' is-invalid' : ''), 'placeholder' => 'Diretoria Sol']) }}
            {!! $errors->first('diretoria_sol', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dt_sol') }}
            {{ Form::text('dt_sol', $caoO->dt_sol, ['class' => 'form-control' . ($errors->has('dt_sol') ? ' is-invalid' : ''), 'placeholder' => 'Dt Sol']) }}
            {!! $errors->first('dt_sol', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nu_tel_sol') }}
            {{ Form::text('nu_tel_sol', $caoO->nu_tel_sol, ['class' => 'form-control' . ($errors->has('nu_tel_sol') ? ' is-invalid' : ''), 'placeholder' => 'Nu Tel Sol']) }}
            {!! $errors->first('nu_tel_sol', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ddd_tel_sol') }}
            {{ Form::text('ddd_tel_sol', $caoO->ddd_tel_sol, ['class' => 'form-control' . ($errors->has('ddd_tel_sol') ? ' is-invalid' : ''), 'placeholder' => 'Ddd Tel Sol']) }}
            {!! $errors->first('ddd_tel_sol', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nu_tel_sol2') }}
            {{ Form::text('nu_tel_sol2', $caoO->nu_tel_sol2, ['class' => 'form-control' . ($errors->has('nu_tel_sol2') ? ' is-invalid' : ''), 'placeholder' => 'Nu Tel Sol2']) }}
            {!! $errors->first('nu_tel_sol2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ddd_tel_sol2') }}
            {{ Form::text('ddd_tel_sol2', $caoO->ddd_tel_sol2, ['class' => 'form-control' . ($errors->has('ddd_tel_sol2') ? ' is-invalid' : ''), 'placeholder' => 'Ddd Tel Sol2']) }}
            {!! $errors->first('ddd_tel_sol2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('usuario_sol') }}
            {{ Form::text('usuario_sol', $caoO->usuario_sol, ['class' => 'form-control' . ($errors->has('usuario_sol') ? ' is-invalid' : ''), 'placeholder' => 'Usuario Sol']) }}
            {!! $errors->first('usuario_sol', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dt_imp') }}
            {{ Form::text('dt_imp', $caoO->dt_imp, ['class' => 'form-control' . ($errors->has('dt_imp') ? ' is-invalid' : ''), 'placeholder' => 'Dt Imp']) }}
            {!! $errors->first('dt_imp', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dt_garantia') }}
            {{ Form::text('dt_garantia', $caoO->dt_garantia, ['class' => 'form-control' . ($errors->has('dt_garantia') ? ' is-invalid' : ''), 'placeholder' => 'Dt Garantia']) }}
            {!! $errors->first('dt_garantia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_email') }}
            {{ Form::text('co_email', $caoO->co_email, ['class' => 'form-control' . ($errors->has('co_email') ? ' is-invalid' : ''), 'placeholder' => 'Co Email']) }}
            {!! $errors->first('co_email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_os_prospect_rel') }}
            {{ Form::text('co_os_prospect_rel', $caoO->co_os_prospect_rel, ['class' => 'form-control' . ($errors->has('co_os_prospect_rel') ? ' is-invalid' : ''), 'placeholder' => 'Co Os Prospect Rel']) }}
            {!! $errors->first('co_os_prospect_rel', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>