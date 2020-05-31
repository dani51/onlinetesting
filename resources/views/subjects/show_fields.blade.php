<!-- Subject Name Field -->
{{--{{dd($subjects)}}--}}
<div class="form-group">
    {!! Form::label('subject_name', 'Subject Name:') !!}
    <p>{!! $subjects->subject_name !!}</p>
</div>

<!-- Subject Author Field -->
<div class="form-group">
    {!! Form::label('subject_author', 'Subject Author:') !!}
    <p>{!! $subjects->subject_author !!}</p>
</div>

<!-- Subject Total questions -->
<div class="form-group">
    {!! Form::label('subject_author', 'Total Questions:') !!}
    <p>{!! $subjects->total_questions !!}</p>
</div>

<!-- Subject Test Time Field -->
<div class="form-group">
    {!! Form::label('subject_test_time', 'Subject Test Time:') !!}
    <p>{!! $subjects->subject_test_time !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $subjects->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $subjects->updated_at !!}</p>
</div>

