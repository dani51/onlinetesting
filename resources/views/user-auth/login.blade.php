
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online - Testing System</title>

    <!-- Common Plugins -->
    <link href="{{asset('assets/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom Css-->
    <link href="{{asset("assets/css/style.css")}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        html,body{
            height: 100%;
        }
    </style>
</head>
<body class="bg-light">

<div class="misc-wrapper">
    <div class="misc-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-4">
                    <div class="misc-header text-center">
{{--                        <img alt="" src="assets/img/icon.png" class="logo-icon margin-r-10">--}}
{{--                        <img alt="" src="assets/img/logo-dark.png" class="toggle-none hidden-xs">--}}
                        <h1>User Login</h1>
                    </div>
                    <div class="misc-box">
                        <form role="form">
                            <div class="form-group">
                                <label  for="exampleuser1">Username</label>
                                <div class="group-icon">
                                    <input id="exampleuser1" type="text" placeholder="Username" class="form-control" data-validation="required">
                                    <span class="icon-user text-muted icon-input"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <div class="group-icon">
                                    <input id="exampleInputPassword1" type="password" data-validation="required" placeholder="Password" class="form-control">
                                    <span class="icon-lock text-muted icon-input"></span>
                                </div>
                            </div>
                            <div class="clearfix">
                                <div class="float-left">
                                    <div class="checkbox checkbox-primary margin-r-5">
                                        <input id="checkbox2" type="checkbox" checked="">
                                        <label for="checkbox2"> Remember Me </label>
                                    </div>
                                </div>
                                <div class="float-right">
                                    <button type="submit" class="btn btn-block btn-primary btn-rounded box-shadow">Login</button>
                                </div>
                            </div>
                            <hr>
                            <p class="text-center"><a href="{{url('/user-signup')}}">Need to Signup?</a> </p>
                            <a href="{{url('/user-signup')}}" class="btn btn-block btn-success btn-rounded box-shadow">Register Now</a>
                        </form>
                    </div>
                    <div class="text-center misc-footer">
                        <p>Copyright &copy; 2019 OTS</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Common Plugins -->
<script src="{{asset('assets/lib/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('assets/lib/bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('assets/lib/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/lib/pace/pace.min.js')}}"></script>
<script src="{{asset('assets/lib/jasny-bootstrap/js/jasny-bootstrap.min.js')}}"></script>
<script src="{{asset('assets/lib/slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('assets/lib/nano-scroll/jquery.nanoscroller.min.js')}}"></script>
<script src="{{asset('assets/lib/metisMenu/metisMenu.min.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script>
    $.validate({
        modules : 'security'
    });
</script>

</body>
</html>
