@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Questions
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">

                    {!! Form::open(['route' => 'questions.store']) !!}
                    {{--   create question form is calling here using include function--}}
                        @include('questions.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
