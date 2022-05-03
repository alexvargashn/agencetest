<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('co_escritorio') }}
            {{ Form::text('co_escritorio', $caoEscritorio->co_escritorio, ['class' => 'form-control' . ($errors->has('co_escritorio') ? ' is-invalid' : ''), 'placeholder' => 'Co Escritorio']) }}
            {!! $errors->first('co_escritorio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('local') }}
            {{ Form::text('local', $caoEscritorio->local, ['class' => 'form-control' . ($errors->has('local') ? ' is-invalid' : ''), 'placeholder' => 'Local']) }}
            {!! $errors->first('local', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>