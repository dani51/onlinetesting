@auth

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online - Testing System </title>

    <!-- Common Plugins -->
    <link href="assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Css-->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
@endauth

<!-- ============================================================== -->
<!-- 						Topbar Start 							-->
<!-- ============================================================== -->
@include('front-layouts.topbar')
<!-- ============================================================== -->
<!--                        Topbar End                              -->
<!-- ============================================================== -->


<!-- ============================================================== -->
<!-- 						Navigation Start 						-->
<!-- ============================================================== -->
@include('front-layouts.navigation')
<!-- ============================================================== -->
<!-- 						Navigation End	 						-->
<!-- ============================================================== -->


<!-- ============================================================== -->
<!-- 						Content Start	 						-->
<!-- ============================================================== -->
<div class="row page-header">
    <div class="col-lg-6 align-self-center ">
        <ol class="breadcrumb">
{{--       <li class="breadcrumb-item"><a href="#">Home</a></li>--}}
{{--            <li class="breadcrumb-item active"><a href="#">Subjects</a></li>--}}

        </ol>
    </div>
</div>
<div class="row">
    <div class="col-md-12">

    </div>
</div>

<section class="main-content">
    @include('flash::message')
@yield('content')

{{--    <footer class="footer">--}}
{{--    <span>Copyright &copy; 2019 Testing Service</span>--}}
{{--    </footer>--}}

</section>
<!-- ============================================================== -->
<!-- 						Content End		 						-->
<!-- ============================================================== -->

<!--Common Plugins-->
<script src="{{asset('assets/lib/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('assets/lib/bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('assets/lib/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/lib/pace/pace.min.js')}}"></script>
<script src="{{asset('assets/lib/jasny-bootstrap/js/jasny-bootstrap.min.js')}}"></script>
<script src="{{asset('assets/lib/slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('assets/lib/nano-scroll/jquery.nanoscroller.min.js')}}"></script>
<script src="{{asset('assets/lib/metisMenu/metisMenu.min.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>

<!-- Flot -->
<script src="{{asset('assets/lib/flot/jquery.flot.js')}}"></script>
<script src="{{asset('assets/lib/flot/jquery.flot.tooltip.min.js')}}"></script>
<script src="{{asset('assets/lib/flot/jquery.flot.resize.js')}}"></script>

<!-- Sparkline-->
<script src="{{asset('assets/lib/sparkline/jquery.sparkline.min.js')}}"></script>
<script>

    $('#sparkline1').sparkline([4, 5, 0, 10, 9, 12, 4, 9, 4, 5, 3, 10, 9, 12, 10, 9, 12, 4, 9, 4, 5, 0, 10, 9, 12, 4, 9, 4, 5, 3, 10, 9, 12, 10, 9, 12, 4, 9, 12, 10, 9, 12, 4, 9 ],
        {
            type: 'bar',
            width: '100%',
            height: '80',
            barWidth: '2',
            resize: true,
            barSpacing: '6',
            barColor: 'rgba(255, 255, 255, 0.3)'
        });

    $("#sparkline2").sparkline([34, 43, 43, 35, 44, 32, 15, 22, 46, 33, 86, 54, 73, 53, 12, 53, 23, 65, 23, 63, 53, 42, 34, 56, 76, 15, 54, 23, 44], {
        type: 'line',
        width: '100%',
        height: '80',
        lineColor: '#4150c4',
        fillColor: '#4150c4',
        minSpotColor:'#4150c4',
        maxSpotColor: '#4150c4',
        highlightLineColor: 'rgba(0, 0, 0, 0.2)',
        highlightSpotColor: '#4150c4'
    });

    $("#sparkline3").sparkline([34, 43, 43, 35, 44, 32, 15, 22, 46, 33, 86, 54, 73, 53, 12, 53, 23, 65, 23, 63, 53, 42, 34, 56, 76, 15, 54, 23, 44], {
        type: 'line',
        width: '100%',
        height: '80',
        lineColor: '#fff',
        fillColor: '#f4516c',
        maxSpotColor: '#f4516c',
        highlightLineColor: 'rgba(0, 0, 0, 0.2)',
        highlightSpotColor: '#26c6da'
    });

    $('#sparkline4').sparkline([ 4, 5, 2, 10, 9, 12, 4, 9], {
        type: 'bar',
        width: '100%',
        height: '70',
        barWidth: '8',
        resize: true,
        barSpacing: '5',
        barColor: '#5867dd'
    });

    $('#sparkline5').sparkline([ 4, 5, 2, 10, 9, 12, 4, 9], {
        type: 'bar',
        width: '100%',
        height: '70',
        barWidth: '8',
        resize: true,
        barSpacing: '5',
        barColor: '#66BB6A'
    });

    $('#sparkline6').sparkline([ 4, 5, 2, 10, 9, 12, 4, 9], {
        type: 'bar',
        width: '100%',
        height: '70',
        barWidth: '8',
        resize: true,
        barSpacing: '5',
        barColor: '#f8c200'
    });

    $('#sparkline7').sparkline([ 4, 5, 2, 10, 9, 12, 4, 9], {
        type: 'bar',
        width: '100%',
        height: '70',
        barWidth: '8',
        resize: true,
        barSpacing: '5',
        barColor: '#EF5350'
    });

</script>
</body>
</html>
