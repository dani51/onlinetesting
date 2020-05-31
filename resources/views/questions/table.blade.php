<div class="table-responsive">
    <table class="table" id="questions-table">
        <thead>
            <tr>
                <th>Subject Id</th>

        <th>Question Name</th>

        <th>Question Answer</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($questions as $questions)
            <tr>
                <td>{!! $questions->subject_id !!}</td>

            <td>{!! $questions->question_name !!}</td>

            <td>{!! $questions->question_answer !!}</td>
                <td>
                    {!! Form::open(['route' => ['questions.destroy', $questions->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('questions.show', [$questions->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('questions.edit', [$questions->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
