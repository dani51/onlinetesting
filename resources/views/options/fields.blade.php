
    <div class="form-row">
        <!-- Option Name Field -->
        <div class="form-group col-sm-4">
            <meta name="csrf-token" content="{{ csrf_token() }}">
            {!! Form::label('subject_id', 'Choose Subject:') !!}
            <select class="form-control" name="" id="subject_id">
                <option value="">Select Subject</option>
                @if(!empty($subjects))
                    @foreach($subjects as $s)
                        <option value="{{$s->id}}">{{$s->subject_name}}</option>
                    @endforeach
                @endif
            </select>
        </div>
        <div class="form-group col-sm-4">
            {!! Form::label('question_id', 'Choose Question:') !!}
            <select class="form-control" name="question_id" id="question_id">
                @if(!empty($question))
                    @foreach($question as $q)
                        <option value="{{$q->id}}">{{$q->question_name}}</option>
                    @endforeach
                @endif
            </select>
        </div>

    </div>
    <div class="form-row">
        <div class="col-md-4">
            <div class="form-group col-sm-8" >
                <div class="add-more-d">
                    {!! Form::label('answer', 'Put answer option here:') !!}
                    {!! Form::text('answer', null, ['class' => 'form-control' ,'required']) !!}
                </div>
            </div>
        </div>
    </div>
    <div class="form-group col-sm-8" >
        <div class="add-more">
            {!! Form::label('option_name', 'Option:') !!}
            {!! Form::text('option_name[]', null, ['class' => 'form-control']) !!}
        </div>
        </div>
    <div class="form-row">
        <div class="form-group col-md-8" >
            <div class="append-more">

            </div>
        </div>
    </div>

<div class="clearfix"></div>
<!-- Submit Field -->
<div class="form-row">
    <div class="clearfix"></div>
    <div class="form-group  col-sm-4">
        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
        <a href="{!! route('options.index') !!}" class="btn btn-default">Cancel</a>
    </div>
    <div class="form-group  col-sm-4">
        <button class="btn btn-primary add-more-option" >Add Option</button>
    </div>

</div>

@section('scripts')
<script type="text/javascript">
    $(document).ready(function(){
        $( "#question_id" ).prop( "disabled", true );

        $("#subject_id").change(function(){
            var level_id = $("#subject_id").val();
            if(level_id != '' && level_id != 0){
                $.ajax({
                    url:"/fetch_question",
                    method:"POST",
                    
                    data:{level_id:level_id},
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },

                    success:function(response){
                        //console.log(response);
                        $("#question_id").html(response);
                        $( "#question_id" ).prop( "disabled", false );
                        
                    }
                });
            } 
            else {
                $("#question_id").prop( "disabled", true );
            }
        });
    });
</script>
@endsection