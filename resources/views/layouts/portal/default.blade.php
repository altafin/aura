<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.portal.head')
    </head>
    <body class="app">
        <header class="app-header fixed-top">
            @include('layouts.portal.header')
            @include('layouts.portal.sidepanel')
        </header>
        <div class="app-wrapper">
            <div class="app-content pt-3 p-md-3 p-lg-4">
                @yield('content')
            </div>
            <footer class="app-footer">
            @include('layouts.portal.footer')
            </footer>
        </div>
        <!-- Javascript -->
        <script src="assets/plugins/popper.min.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <!-- Charts JS -->
        <script src="assets/plugins/chart.js/chart.min.js"></script>
        <script src="assets/js/index-charts.js"></script>
        <!-- Page Specific JS -->
        <script src="assets/js/app.js"></script>
    </body>
</html>
