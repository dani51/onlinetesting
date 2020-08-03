    
<div class="table-responsive">
    <table class="table" id="options-table">
        <thead>
            <tr>
                <th>Question Id</th>
        <th>Option Name</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody id="t_body">
        @foreach($options as $options)
            <tr>
                <td>{!! $options->question_id !!}</td>
            <td>{!! $options->option_name !!}</td>
                <td>
                    <div class='btn-group'>
                        <a href="/options/{{$options->id}}" class='btn btn-default btn-xs'>
                            <i class="glyphicon glyphicon-eye-open"></i>
                        </a>

                        <a href="/options/{{$options->id}}/edit" class='btn btn-default btn-xs'>
                            <i class="glyphicon glyphicon-edit"></i>
                        </a>
                        <a href="/delete_options/{{$options->id}}" class='btn btn-danger btn-xs'>
                            <i class="glyphicon glyphicon-trash"></i>
                        </a>
                       
                    </div>
                    
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

