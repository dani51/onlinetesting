<!-- Total Questions Field -->

<div class="form-group col-sm-6">
    {!! Form::label('subject_id', 'Choose Subject:') !!}
    <select class="form-control" name="subject_id" id="subject_id">
        @if(!empty($subjects))
            @foreach($subjects as $s)
                <option value="{{$s->id}}">{{$s->subject_name}}</option>
            @endforeach
        @endif
    </select>
</div>
{{--<div class="form-group col-sm-6">--}}
{{--    {!! Form::label('total_questions', 'Total Questions:') !!}--}}
{{--    {!! Form::number('total_questions', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

<!-- Question Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('question_name', 'Question Statement:') !!}
    {!! Form::text('question_name', null, ['class' => 'form-control']) !!}
</div>
<!-- Question type -->
<div class="form-group col-sm-6">
    {!! Form::label('question_type', 'Question Type:') !!}
    <select class="form-control" name="question_type" id="question_type">
                <option value="1">Beginner</option>
                <option value="2">Intermediate</option>
                <option value="3">Professional</option>
    </select>
</div>
<!-- Question Answer Field -->
<div class="form-group col-sm-6">
    {!! Form::label('question_answer', 'Question Answer:') !!}
    {!! Form::text('question_answer', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('questions.index') !!}" class="btn btn-default">Cancel</a>
</div>
