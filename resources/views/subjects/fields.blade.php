<!-- Subject Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('subject_name', 'Subject Name:') !!}
    {!! Form::text('subject_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Subject Author Field -->
<div class="form-group col-sm-6">
    {!! Form::label('subject_author', 'Subject Author:') !!}
    {!! Form::text('subject_author', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('total_questions', 'Total Questions:') !!}
    {!! Form::number('total_questions', null, ['class' => 'form-control']) !!}
</div>
<!-- Subject Test Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('subject_test_time', 'Subject Test Time:') !!}
    {!! Form::number('subject_test_time', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('subjects.index') !!}" class="btn btn-default">Cancel</a>
</div>
