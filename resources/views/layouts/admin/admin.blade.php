<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset("public/admin_assets/plugins/fontawesome-free/css/all.min.css") }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">


    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset("public/admin_assets/dist/css/adminlte.min.css") }}">



    @yield("page-css")
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="{{ asset("public/admin_assets/dist/img/AdminLTELogo.png") }}" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    @include("layouts.admin.navbar")
    <!-- /.navbar -->

        <!-- Main Sidebar Container -->
    @include("layouts.admin.sidebar")

    @yield("section")

    @include("layouts.admin.footer")

</div>

<!-- jQuery -->
<script src="{{ asset("public/admin_assets/plugins/jquery/jquery.min.js") }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset("public/admin_assets/plugins/jquery-ui/jquery-ui.min.js") }}"></script>

<!-- Bootstrap 4 -->
<script src="{{ asset("public/admin_assets/plugins/bootstrap/js/bootstrap.bundle.min.js") }}"></script>


<!-- AdminLTE App -->
<script src="{{ asset("public/admin_assets/dist/js/adminlte.js") }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset("public/admin_assets/dist/js/demo.js") }}"></script>
{{--
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset("admin_assets/dist/js/pages/dashboard.js") }}"></script>
--}}

@yield("page-script")
</body>
</html>
