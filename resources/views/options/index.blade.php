@extends('layouts.app')

@section('content')
    <style type="text/css">
        .no-gutter{
            padding-left: 0px;
            border-radius: 5px;
            margin: 20px 0px;
        }
        .no-gutter .form-control{
            border-radius: 5px; 
        }
    </style>
    <section class="content-header">
        <h1 class="pull-left">Options</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('options.create') !!}">Add New</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <!--filter-->
        
        <div class="form-row">
            <div class="col-md-5 no-gutter">

               
                <select class="form-control" id="subject_select">
                    <option value="">Select Subject</option>
                    @foreach ($question as $quest)
                        
                        <option value="{{$quest->id}}">{{$quest->subject_name}}</option>
                    @endforeach 
                </select>
            </div>
            <div class="col-md-3 no-gutter">
                <button class="btn btn-primary" id="filter">Filter</button>
            </div>
        </div>

        <div class="clearfix"></div>
        <div class="box box-primary">

            <div class="box-body">
                    @include('options.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>

@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            
            $("#filter").click(function(){
                var level_id = $("#subject_select").val();
                if(level_id != '' && level_id != 0){
                    $.ajax({
                        url:"/fetch_options",
                        method:"POST",
                        
                        data:{level_id:level_id},
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },

                        success:function(response){
                            //var datas = $.parseJSON(response); 
                            console.log(response);
                            $("#t_body").html(response);
   
                        }
                    });
                } 
                else {
                    
                }
            });
        });
</script>
@endsection
