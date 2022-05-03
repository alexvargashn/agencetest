<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('co_diary_report') }}
            {{ Form::text('co_diary_report', $caoDiaryReport->co_diary_report, ['class' => 'form-control' . ($errors->has('co_diary_report') ? ' is-invalid' : ''), 'placeholder' => 'Co Diary Report']) }}
            {!! $errors->first('co_diary_report', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hr_gasta') }}
            {{ Form::text('hr_gasta', $caoDiaryReport->hr_gasta, ['class' => 'form-control' . ($errors->has('hr_gasta') ? ' is-invalid' : ''), 'placeholder' => 'Hr Gasta']) }}
            {!! $errors->first('hr_gasta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_atividade') }}
            {{ Form::text('co_atividade', $caoDiaryReport->co_atividade, ['class' => 'form-control' . ($errors->has('co_atividade') ? ' is-invalid' : ''), 'placeholder' => 'Co Atividade']) }}
            {!! $errors->first('co_atividade', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ds_assunto') }}
            {{ Form::text('ds_assunto', $caoDiaryReport->ds_assunto, ['class' => 'form-control' . ($errors->has('ds_assunto') ? ' is-invalid' : ''), 'placeholder' => 'Ds Assunto']) }}
            {!! $errors->first('ds_assunto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_movimento') }}
            {{ Form::text('co_movimento', $caoDiaryReport->co_movimento, ['class' => 'form-control' . ($errors->has('co_movimento') ? ' is-invalid' : ''), 'placeholder' => 'Co Movimento']) }}
            {!! $errors->first('co_movimento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nu_os') }}
            {{ Form::text('nu_os', $caoDiaryReport->nu_os, ['class' => 'form-control' . ($errors->has('nu_os') ? ' is-invalid' : ''), 'placeholder' => 'Nu Os']) }}
            {!! $errors->first('nu_os', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_sistema') }}
            {{ Form::text('co_sistema', $caoDiaryReport->co_sistema, ['class' => 'form-control' . ($errors->has('co_sistema') ? ' is-invalid' : ''), 'placeholder' => 'Co Sistema']) }}
            {!! $errors->first('co_sistema', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>