<!DOCTYPE html>
<html lang="en">
<head>
    @livewireStyles()
    {{-- <link rel="stylesheet" href="/css/style.css"> --}}
    <link rel="stylesheet" href="/css/app.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ENL CrMA | {{ Route::currentRouteName() }}</title>
    <link rel="icon" href="{{ asset("images/favicon.png") }}">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/jqvmap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/iDashboard.css" />
</head>
<body>
    <div class="yoo-height-b60 yoo-height-lg-b60"></div>
    @include("layouts.partials.navigation")
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 p-3 bg-light">
                <p>Crews</p>
                <p>Vessel</p>
                <p>Job</p>
                <p>Payroll</p>
            </div>
            <div class="col-md-10">
                @yield("Content")
            </div>
        </div>
    </div>
    @livewireScripts()
    <script src="/js/app.js"></script>
    <!-- Required Scripts -->
    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/smooth-scrollbar.js"></script>
    <script src="js/apexcharts.min.js"></script>
    <script src="js/apexcharts.initialize.js"></script>
    <script src="js/svg-maps/jquery.vmap.min.js"></script>
    <script src="js/svg-maps/jquery.vmap.usa.js"></script>
    <script src="js/svg-maps/jquery.vmap.main.js"></script>
    <!-- <script src="assets/js/jquery.dataTables.min.js"></script> -->
    <script src="js/iDashboard.js"></script>
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
</body>
</html>