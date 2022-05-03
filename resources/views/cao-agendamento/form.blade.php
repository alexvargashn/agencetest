<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('co_agendamento') }}
            {{ Form::text('co_agendamento', $caoAgendamento->co_agendamento, ['class' => 'form-control' . ($errors->has('co_agendamento') ? ' is-invalid' : ''), 'placeholder' => 'Co Agendamento']) }}
            {!! $errors->first('co_agendamento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dt_hr_inicio') }}
            {{ Form::text('dt_hr_inicio', $caoAgendamento->dt_hr_inicio, ['class' => 'form-control' . ($errors->has('dt_hr_inicio') ? ' is-invalid' : ''), 'placeholder' => 'Dt Hr Inicio']) }}
            {!! $errors->first('dt_hr_inicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dt_hr_fim') }}
            {{ Form::text('dt_hr_fim', $caoAgendamento->dt_hr_fim, ['class' => 'form-control' . ($errors->has('dt_hr_fim') ? ' is-invalid' : ''), 'placeholder' => 'Dt Hr Fim']) }}
            {!! $errors->first('dt_hr_fim', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_status_agendamento') }}
            {{ Form::text('co_status_agendamento', $caoAgendamento->co_status_agendamento, ['class' => 'form-control' . ($errors->has('co_status_agendamento') ? ' is-invalid' : ''), 'placeholder' => 'Co Status Agendamento']) }}
            {!! $errors->first('co_status_agendamento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_diary_report_consultor') }}
            {{ Form::text('co_diary_report_consultor', $caoAgendamento->co_diary_report_consultor, ['class' => 'form-control' . ($errors->has('co_diary_report_consultor') ? ' is-invalid' : ''), 'placeholder' => 'Co Diary Report Consultor']) }}
            {!! $errors->first('co_diary_report_consultor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_complemento') }}
            {{ Form::text('co_complemento', $caoAgendamento->co_complemento, ['class' => 'form-control' . ($errors->has('co_complemento') ? ' is-invalid' : ''), 'placeholder' => 'Co Complemento']) }}
            {!! $errors->first('co_complemento', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>