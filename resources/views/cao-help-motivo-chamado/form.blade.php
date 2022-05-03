<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('co_motivo') }}
            {{ Form::text('co_motivo', $caoHelpMotivoChamado->co_motivo, ['class' => 'form-control' . ($errors->has('co_motivo') ? ' is-invalid' : ''), 'placeholder' => 'Co Motivo']) }}
            {!! $errors->first('co_motivo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ds_motivo') }}
            {{ Form::text('ds_motivo', $caoHelpMotivoChamado->ds_motivo, ['class' => 'form-control' . ($errors->has('ds_motivo') ? ' is-invalid' : ''), 'placeholder' => 'Ds Motivo']) }}
            {!! $errors->first('ds_motivo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>