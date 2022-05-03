<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('co_cliente') }}
            {{ Form::text('co_cliente', $caoClienteContato->co_cliente, ['class' => 'form-control' . ($errors->has('co_cliente') ? ' is-invalid' : ''), 'placeholder' => 'Co Cliente']) }}
            {!! $errors->first('co_cliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dt_contato') }}
            {{ Form::text('dt_contato', $caoClienteContato->dt_contato, ['class' => 'form-control' . ($errors->has('dt_contato') ? ' is-invalid' : ''), 'placeholder' => 'Dt Contato']) }}
            {!! $errors->first('dt_contato', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fg_agendado') }}
            {{ Form::text('fg_agendado', $caoClienteContato->fg_agendado, ['class' => 'form-control' . ($errors->has('fg_agendado') ? ' is-invalid' : ''), 'placeholder' => 'Fg Agendado']) }}
            {!! $errors->first('fg_agendado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hr_ini') }}
            {{ Form::text('hr_ini', $caoClienteContato->hr_ini, ['class' => 'form-control' . ($errors->has('hr_ini') ? ' is-invalid' : ''), 'placeholder' => 'Hr Ini']) }}
            {!! $errors->first('hr_ini', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hr_end') }}
            {{ Form::text('hr_end', $caoClienteContato->hr_end, ['class' => 'form-control' . ($errors->has('hr_end') ? ' is-invalid' : ''), 'placeholder' => 'Hr End']) }}
            {!! $errors->first('hr_end', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>