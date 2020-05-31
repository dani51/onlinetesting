<div class="table-responsive">
    <table class="table" id="options-table">
        <thead>
            <tr>
                <th>Question Id</th>
        <th>Option Name</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($options as $options)
            <tr>
                <td>{!! $options->question_id !!}</td>
            <td>{!! $options->option_name !!}</td>
                <td>
                    {!! Form::open(['route' => ['options.destroy', $options->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('options.show', [$options->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('options.edit', [$options->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
