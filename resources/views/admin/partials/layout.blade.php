<!doctype html>
<html lang="en">

<head>
    <title> Dashboard </title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

    <!-- Material css files -->
    <link href="{{asset('asset/css/bootstrap.css')}}" rel="stylesheet" />
    <link href="{{asset('asset/css/material-dashboard.css')}}" rel="stylesheet" />

    <!-- Admin css files -->
    <link rel="stylesheet" href="{{asset('asset/admin/css/stylesheet.css')}}">

</head>

<body class="dark-edition">

    <div class="wrapper ">

        <!-- sidebar -->
        @include('admin.partials.sideBar')
        <!-- End sidebar -->

        <div class="main-panel">

            <!-- Navbar -->
            @include('admin.partials.navbar')
            <!-- End Navbar -->

            <div class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>

            <!-- Footer -->
            @include('admin.partials.footer')
            <!-- End Footer -->

        </div>
    </div>

    <!-- Main js files -->
    <script src="{{asset('asset/js/jquery-2.2.4.min.js')}}"></script>
    <script src="{{asset('asset/js/popper.min.js')}}"></script>
    <script src="{{asset('asset/js/bootstrap-material-design.min.js')}}"></script>
    <script src="https://unpkg.com/default-passive-events"></script>
    <script src="{{asset('asset/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>

    <!-- Material-Dashboard js Files -->
    <script src="{{asset('asset/js/plugins/chartist.min.js')}}"></script>
    <script src="{{asset('asset/js/plugins/bootstrap-notify.js')}}"></script>
    <script src="{{asset('asset/js/material-dashboard.js')}}"></script>

    <!-- Custom js file -->
    <script src="{{asset('asset/admin/js/main.js')}}"></script>

</body>

</html>
