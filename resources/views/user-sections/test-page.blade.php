@extends("user-frontend.index")
@section("content")
    <div class="row">

{{--        @if (!empty($subjects))--}}
{{--            @foreach($subjects as $s)--}}
                <div class="col-md-12">

    <div class="jumbotron text-center">
        <h1 class="display-3">Welcome Note</h1>

        <p class="pull-right">Total Time : <span id="time">60:00</span> minutes</p>
    </div>

                    <form class="form-group" method="post" action="/test-submission">

                        <input type="hidden" name="user-name" value="{!! Auth::user()->id !!}">

                        @csrf
                        @php
                            $i=1;
                            $i2=1;
                            $counter=0;

                        @endphp
                        @if ($questions)
                            {{--{{dd($questions)}}--}}

                            @foreach($questions as $qu)
                                @if(!empty($qu->subject_name) && $counter==0 )
                                <h3>{{$qu->subject_name}}</h3>
                                <input type="hidden" name="subject-name" value="{{$qu->id}}">
                                @endif

                                <div class="container">
                                    <div class="question-div">Question {{$i}} :<p>   {{$qu->question_name}}</p></div>
                                    <div class="radio-div">
                                        <div class="radio radio-info" >
                                            @php
                                                $op=$qu->id;
                                            @endphp

                                            @foreach($questions2 as $q)
                                                @if($q->question_id==$qu->q_id && $q->deleted_at == null)


                                                    <input type="radio" name="option{{$qu->q_id}}"  id="radio{{$i2}}" tabindex="{{$i2}}" val="{{$q->answer}}" value="{{$q->option_name.'__'.$q->answer}}" >
                                                    <label for="radio{{$i2}}" style="margin: 10px"> {{$q->option_name}}</label>

                                                    @php
                                                        $i2++;
                                                    @endphp

                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                            @php
                                                $timer=$qu->subject_test_time;
                                                $i++;
                                            $counter=1;
                                            @endphp
                            @endforeach
                            @php
                                $counter=0;
                            @endphp
                        @endif


                        <button class="btn btn-primary test-submit" type="submit">Submit Test</button>

                    </form>



                </div>
{{--            @endforeach--}}
{{--        @endif--}}
    <script src="{{asset('admin/js/jquery.min.js')}}"></script>
        <script>

            function startTimer(duration, display) {
                var timer = duration, minutes, seconds;
                setInterval(function () {
                    minutes = parseInt(timer / 60, 10);
                    seconds = parseInt(timer % 60, 10);

                    minutes = minutes < 10 ? "0" + minutes : minutes;
                    seconds = seconds < 10 ? "0" + seconds : seconds;

                    display.textContent = minutes + ":" + seconds;

                    if (--timer < 0) {

                        $('.test-submit').trigger("click");

                    }
                }, 1000);
            }

            window.onload = function () {
{{--                @if(!empty($timer))--}}
                var fiveMinutes = 60 * '{{$timer}}',
{{--                @endif--}}

                    display = document.querySelector('#time');
                    startTimer(fiveMinutes, display);
            };



            $(document).ready(function() {

                $('.test-submit').on("click",function (e) {

                    e.preventDefault();
                    //Make groups
                    var names = []
                    $('input:radio').each(function () {
                        var rname = $(this).attr('name');
                        if ($.inArray(rname, names) == -1) names.push(rname);
                    });
                    var radioError = false;
                    $.each(names, function (i, name) {
                        if ($('input[name="' + name + '"]:checked').length == 0) {
                            radioError = true;
                        }
                    });

                    //check for error
                    if(radioError) {
                        return alert('You need to select 1 option from each Question.');
                    }
                $("form").submit();

                });

            });


        </script>
    </div>
@endsection

