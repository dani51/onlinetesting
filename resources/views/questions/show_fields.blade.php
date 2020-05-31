<!-- Subject Id Field -->
{{--{{dd($questions)}}--}}
<div class="form-group">
    {!! Form::label('subject_id', 'Subject Id:') !!}
    <p>{!! $questions->subject_id !!}</p>
</div>

<!-- Total Questions Field -->
<div class="form-group">
    {!! Form::label('total_qsuestions', 'Total Questions:') !!}
    <p>{!! $questions->total_questions !!}</p>
</div>

<!-- Question Name Field -->
<div class="form-group">
    {!! Form::label('question_name', 'Question Name:') !!}
    <p>{!! $questions->question_name !!}</p>
</div>

<!-- Question Answer Field -->
<div class="form-group">
    {!! Form::label('question_answer', 'Question Answer:') !!}
    <p>{!! $questions->question_answer !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $questions->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $questions->updated_at !!}</p>
</div>

