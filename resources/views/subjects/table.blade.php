<div class="table-responsive">
    <table class="table" id="subjects-table">
        <thead>
            <tr>
                <th>Subject Name</th>
        <th>Subject Author</th>
        <th>Subject Test Time</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($subjects as $s)
            <tr>
                <td>{{$s->subject_name}}  </td>
            <td>{{$s->subject_author}}  </td>
            <td>{{$s->subject_test_time}}  </td>
                <td>
                    {{ Form::open(['route' => ['subjects.destroy', $s->id], 'method' => 'delete']) }}
                    <div class='btn-group'>
                        <a href="{{route('subjects.show', [$s->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('subjects.edit', [$s->id])}}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {{ Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) }}
                    </div>
                    {{Form::close()}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
