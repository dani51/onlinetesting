<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>online Testing Service</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>



    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
{{--    <link rel="stylesheet" href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css">--}}
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    <!-- Ionicons -->
{{--    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">--}}
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">--}}
    <!-- Theme style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/AdminLTE.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/skins/_all-skins.min.css">

    <!-- iCheck -->
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/square/_all.css">--}}

{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css">--}}
{{--    <link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}">--}}
{{--    <link rel="stylesheet" href="{{asset('admin/css/bootstrap-toggle.min.css')}}">--}}
{{--    <link rel="stylesheet" href="{{asset('admin/css/font-awesome.min.css')}}">--}}

{{--    <link rel="stylesheet" href="{{asset('admin/css/AdminLTE.min.css')}}">--}}

{{--    <link rel="stylesheet" href="{{asset('admin/css/_all-skins.min.css')}}">--}}

{{--    <link rel="stylesheet" href="{{asset('admin/css/_all.css')}}">--}}

{{--    <link rel="stylesheet" href="{{asset('admin/css/select2.min.css')}}">--}}

{{--    <link rel="stylesheet" href="{{asset('admin/css/ionicons.min.css')}}">--}}

{{--    <link rel="stylesheet" href="{{asset('admin/css/bootstrap-datetimepicker.min.css')}}">--}}
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/AdminLTE.min.css">--}}
{{--        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">--}}
    @yield('css')
</head>

<body class="skin-blue sidebar-mini">
{{--@if (Auth::guest())--}}
@auth
    <div class="wrapper">
        <!-- Main Header -->
        <header class="main-header">

            <!-- Logo -->
            <a href="#" class="logo">
                <b>OTS Admin</b>
            </a>

            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                {{--<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">--}}
                    {{--<span class="sr-only">Toggle navigation</span>--}}
                {{--</a>--}}
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account Menu -->
                        <li class="dropdown user user-menu">
                            <!-- Menu Toggle Button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <!-- The user image in the navbar-->
                                <img src="{{asset('admin/images/images.png')}}"
                                     class="user-image" alt="User Image"/>
                                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                <span class="hidden-xs">{!! Auth::user()->name !!}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- The user image in the menu -->
                                <li class="user-header">
                                    <img src="{{asset('admin/images/images.png')}}"
                                         class="img-circle" alt="User Image"/>
                                    <p>
                                        {!! Auth::user()->name !!}
                                        <small>Member since {!! Auth::user()->created_at->format('M. Y') !!}</small>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="/" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="{!! url('/admin/logout') !!}" class="btn btn-default btn-flat">
                                            Sign out
                                        </a>
{{--                                        <form id="logout-form" action="{{ url('/admin/logout') }}" method="POST" style="display: none;">--}}
{{--                                            {{ csrf_field() }}--}}
{{--                                        </form>--}}
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- Left side column. contains the logo and sidebar -->
        @include('layouts.sidebar')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
        </div>

        <!-- Main Footer -->


    </div>
{{--@endif--}}
@endauth
    <!-- jQuery 3.1.1 -->
{{--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>--}}
{{--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>--}}
{{--    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>--}}
{{--    <!-- AdminLTE App -->--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/js/adminlte.min.js"></script>--}}

{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.min.js"></script>--}}


<script src="{{asset('admin/js/jquery.min.js')}}" ></script>
<script src="{{asset('admin/js/custom.js')}}" ></script>
<script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin/js/moment.min.js')}}"></script>

{{--<script src="{{asset('admin/js/bootstrap-datetimepicker.min.js')}}" ></script>--}}
<script src="{{asset('admin/js/bootstrap-toggle.min.js')}}"></script>
<!-- AdminLTE App -->
{{--<script src="{{asset('admin/js/adminlte.min.js')}}" ></script>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/js/adminlte.min.js"></script>--}}
{{--<script src="{{asset('admin/js/icheck.min.js')}}" ></script>--}}
{{--<script src="{{asset('admin/js/select2.min.js')}}"></script>--}}

    @yield('scripts')

</body>
</html>
