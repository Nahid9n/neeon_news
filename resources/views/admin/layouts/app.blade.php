<!doctype html>
<html lang="en" dir="ltr">
<head>
@include('admin.layouts.style')
</head>
<body class="ltr app sidebar-mini">

<!-- PAGE -->
<div class="page">
    <div class="page-main">
        <!-- app-Header -->
        @include('admin.layouts.header')
        <!-- /app-Header -->
        <!--APP-SIDEBAR-->
        @include('admin.layouts.menu')
        <!--/APP-SIDEBAR-->
        <!--app-content open-->
        <div class="app-content main-content mt-0">
            <div class="side-app">
                <!-- CONTAINER -->
                <div class="main-container container-fluid">
                    @yield('body')
                </div>
            </div>
        </div>
        <!-- CONTAINER CLOSED -->
    </div>
    @include('admin.layouts.footer')
</div>
<!-- page -->

<!-- BACK-TO-TOP -->
<a href="#top" id="back-to-top"><i class="fa fa-long-arrow-up"></i></a>
<!-- BACK-TO-TOP -->

@include('admin.layouts.script')
</body>
</html>
