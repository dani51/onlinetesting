@extends("user-frontend.index")
@section("content")
    <div class="row">
            @if (!empty($subjects))
                @foreach($subjects as $s)
                <div class="col-md-3">
                    <div class="widget widget-chart white-bg padding-0">

                        <div class="widget-title">
                            @if (!$result_view)
                            <span class="label label-primary float-right take-test"><a href="{{route('take-test.route',['id'=>$s->id])}}">Take Test</a></span>
                            @endif
                            @if ($result_view)
                            <span class="label label-warning float-right mr-2 take-test"><a href="{{route('take-test.route',['id'=>$s->id])}}"><i class="fa fa-eye" aria-hidden="true"></i></a></span>
                            @endif

                            <h2 class="margin-b-0">{{$s->subject_name}}</h2>

                        </div>
                        <div class="widget-content">
                            <div class="margin-b-10  text-primary"><div class="subject-img">
                                    <img src="{{asset('assets/images/images.jpg')}}">
                                </div>
                                </div>
                            <div class="font-500 text-primary float-right">{{$s->subject_test_time}} Minutes</div>
                            <p class="text-muted margin-b-0">Total Time</p>
                        </div>
                    </div>
                </div>
                @endforeach
            @endif
    </div>
@endsection
