<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="VANNO - Premium directory consumer reviews and listings template by Ansonika">
    <meta name="author" content="Ansonika">
    <meta name="csrf-token" content="{{ csrf_token() }}" />


    <title>VANNO | Premium directory consumer reviews and listings template by Ansonika.</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{ asset("public/img/apple-touch-icon-57x57-precomposed.png") }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{ asset("public/img/apple-touch-icon-72x72-precomposed.png") }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{ asset("public/img/apple-touch-icon-114x114-precomposed.png") }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{ asset("public/img/apple-touch-icon-144x144-precomposed.png") }}">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{ asset("public/css/bootstrap.min.css") }}" rel="stylesheet">
    <link href="{{ asset("public/css/style.css") }}" rel="stylesheet">
    <link href="{{ asset("public/css/vendors.css") }}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{ asset("public/css/custom.css") }}" rel="stylesheet">
    @yield("page-css")
</head>

<body>

@yield("section")

<!-- Sign In Popup -->
<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
    <div class="small-dialog-header">
        <h3>Sign In</h3>
    </div>
    <form method="POST" action="{{ route("login") }}">
        @csrf
        <div class="sign-in-wrapper">
            <a href="{{ route("facebook.login") }}" class="social_bt facebook">Login with Facebook</a>
            <a href="{{ route("google.login") }}" class="social_bt google">Login with Google</a>
            <div class="divider"><span>Or</span></div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" id="email">
                <i class="icon_mail_alt"></i>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" id="password" value="">
                <i class="icon_lock_alt"></i>
            </div>
            <div class="clearfix add_bottom_15">
                <div class="checkboxes float-left">
                    <label class="container_check">Remember me
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="float-right mt-1"><a id="forgot" href="javascript:void(0);">Forgot Password?</a></div>
            </div>
            <div class="text-center"><input type="submit" value="Log In" class="btn_1 full-width"></div>
            <div class="text-center">
                Don???t have an account? <a href="{{route("register")}}">Sign up</a>
            </div>
            <div id="forgot_pw">
                <div class="form-group">
                    <label>Please confirm login email below</label>
                    <input type="email" class="form-control" name="email_forgot" id="email_forgot">
                    <i class="icon_mail_alt"></i>
                </div>
                <p>You will receive an email containing a link allowing you to reset your password to a new preferred one.</p>
                <div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
            </div>
        </div>
    </form>
    <!--form -->
</div>
<!-- /Sign In Popup -->

<div id="toTop"></div><!-- Back to top button -->

<!-- COMMON SCRIPTS -->
<script src="{{ asset("public/js/common_scripts.js") }}"></script>
<script src="{{ asset("public/js/functions.js") }}"></script>
<script src="{{ asset("public/assets/validate.js") }}"></script>

<script>
    $(document).ready(function (){
        $("#logout").on("click",function() {

            $('#logoutForm').submit();
        })
    })
</script>

@yield("page-script")
</body>
</html>
