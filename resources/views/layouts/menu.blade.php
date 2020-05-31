


<li class="{{ Request::is('/') ? 'active' : '' }}">
    <a href="{!! url('/') !!}"><i class="fa fa-edit"></i><span>User List</span></a>
</li>
<li class="{{ Request::is('subjects*') ? 'active' : '' }}">
    <a href="{!! route('subjects.index') !!}"><i class="fa fa-edit"></i><span>Subjects</span></a>
</li>

<li class="{{ Request::is('questions*') ? 'active' : '' }}">
    <a href="{!! route('questions.index') !!}"><i class="fa fa-edit"></i><span>Questions</span></a>
</li>

<li class="{{ Request::is('options*') ? 'active' : '' }}">
    <a href="{!! route('options.index') !!}"><i class="fa fa-edit"></i><span>Options</span></a>
</li>


