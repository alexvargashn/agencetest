<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('co_chamado') }}
            {{ Form::text('co_chamado', $caoHelpChamado->co_chamado, ['class' => 'form-control' . ($errors->has('co_chamado') ? ' is-invalid' : ''), 'placeholder' => 'Co Chamado']) }}
            {!! $errors->first('co_chamado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ds_chamado') }}
            {{ Form::text('ds_chamado', $caoHelpChamado->ds_chamado, ['class' => 'form-control' . ($errors->has('ds_chamado') ? ' is-invalid' : ''), 'placeholder' => 'Ds Chamado']) }}
            {!! $errors->first('ds_chamado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ds_solucao') }}
            {{ Form::text('ds_solucao', $caoHelpChamado->ds_solucao, ['class' => 'form-control' . ($errors->has('ds_solucao') ? ' is-invalid' : ''), 'placeholder' => 'Ds Solucao']) }}
            {!! $errors->first('ds_solucao', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_status') }}
            {{ Form::text('co_status', $caoHelpChamado->co_status, ['class' => 'form-control' . ($errors->has('co_status') ? ' is-invalid' : ''), 'placeholder' => 'Co Status']) }}
            {!! $errors->first('co_status', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_motivo') }}
            {{ Form::text('co_motivo', $caoHelpChamado->co_motivo, ['class' => 'form-control' . ($errors->has('co_motivo') ? ' is-invalid' : ''), 'placeholder' => 'Co Motivo']) }}
            {!! $errors->first('co_motivo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_tela') }}
            {{ Form::text('co_tela', $caoHelpChamado->co_tela, ['class' => 'form-control' . ($errors->has('co_tela') ? ' is-invalid' : ''), 'placeholder' => 'Co Tela']) }}
            {!! $errors->first('co_tela', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_autor') }}
            {{ Form::text('co_autor', $caoHelpChamado->co_autor, ['class' => 'form-control' . ($errors->has('co_autor') ? ' is-invalid' : ''), 'placeholder' => 'Co Autor']) }}
            {!! $errors->first('co_autor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_filial') }}
            {{ Form::text('co_filial', $caoHelpChamado->co_filial, ['class' => 'form-control' . ($errors->has('co_filial') ? ' is-invalid' : ''), 'placeholder' => 'Co Filial']) }}
            {!! $errors->first('co_filial', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_sistema') }}
            {{ Form::text('co_sistema', $caoHelpChamado->co_sistema, ['class' => 'form-control' . ($errors->has('co_sistema') ? ' is-invalid' : ''), 'placeholder' => 'Co Sistema']) }}
            {!! $errors->first('co_sistema', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dt_chamado') }}
            {{ Form::text('dt_chamado', $caoHelpChamado->dt_chamado, ['class' => 'form-control' . ($errors->has('dt_chamado') ? ' is-invalid' : ''), 'placeholder' => 'Dt Chamado']) }}
            {!! $errors->first('dt_chamado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dt_solucao') }}
            {{ Form::text('dt_solucao', $caoHelpChamado->dt_solucao, ['class' => 'form-control' . ($errors->has('dt_solucao') ? ' is-invalid' : ''), 'placeholder' => 'Dt Solucao']) }}
            {!! $errors->first('dt_solucao', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>