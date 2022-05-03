<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('co_status_agendamento') }}
            {{ Form::text('co_status_agendamento', $caoStatusAgendamento->co_status_agendamento, ['class' => 'form-control' . ($errors->has('co_status_agendamento') ? ' is-invalid' : ''), 'placeholder' => 'Co Status Agendamento']) }}
            {!! $errors->first('co_status_agendamento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ds_status_agendamento') }}
            {{ Form::text('ds_status_agendamento', $caoStatusAgendamento->ds_status_agendamento, ['class' => 'form-control' . ($errors->has('ds_status_agendamento') ? ' is-invalid' : ''), 'placeholder' => 'Ds Status Agendamento']) }}
            {!! $errors->first('ds_status_agendamento', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>