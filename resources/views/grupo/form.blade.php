<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Grupos') }}
            {{ Form::text('Grupos', $grupo->Grupos, ['class' => 'form-control' . ($errors->has('Grupos') ? ' is-invalid' : ''), 'placeholder' => 'Grupos']) }}
            {!! $errors->first('Grupos', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>