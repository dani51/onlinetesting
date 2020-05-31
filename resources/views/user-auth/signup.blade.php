
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
                        <h1>User SignUp</h1>
                    </div>
                    <div class="misc-box">
                        <p class="text-center">Sign up to get instant access.</p>
                        <form role="form" action="{{route("user-reg")}}" method="post">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            @csrf
                            <div class="form-group">
                                <label for="eampleuser1">User Name</label>
                                <div class="group-icon">
                                    <input id="userName" name="username" data-validation="required" type="text" placeholder="Enter User Name" class="form-control">
                                    <span class="icon-user text-muted icon-input"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="eampleuser1">Email Id</label>
                                <div class="group-icon">
                                    <input id="eampleuser1" name="email" type="text" placeholder="Enter Email" class="form-control" data-validation="required" >
                                    <span class="icon-envelope text-muted icon-input"></span>
                                </div>
                            </div>
                            <div class="form-group group-icon">
                                <label for="exampleInputPassword1">Password</label>
                                <div class="group-icon">
                                    <input id="exampleInputPassword1" name="password_confirmation" type="password" data-validation="length" data-validation-length="min8" placeholder="Password" class="form-control">
                                    <span class="icon-lock text-muted icon-input"></span>
                                </div>
                            </div>
                            <div class="form-group group-icon">
                                <label for="exampleInputPassword2">Confirm Password</label>
                                <div class="group-icon">
                                    <input id="exampleInputPassword2" type="password" name="password" data-validation="confirmation" placeholder="Confirm Password" class="form-control">
                                    <span class="icon-lock text-muted icon-input"></span>
                                </div>




                            </div>
                            <div class="clearfix">
                                <div class="float-left">
                                    <div class="checkbox checkbox-primary margin-r-5">
                                        <input id="checkbox2" type="checkbox" checked="">
                                        <label for="checkbox2"> I Agree with Terms <a href="#">Terms</a> </label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-block btn-primary btn-rounded box-shadow mt-10">Register Now</button>
                            <hr>

                            <p class=" text-center">Have an account?</p>
                            <a href="{{url('/user-login')}}" class="btn btn-block btn-success btn-rounded box-shadow">Login</a>
                        </form>
                    </div>
                    <div class="text-center">
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
