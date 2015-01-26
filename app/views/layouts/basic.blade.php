<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>
<!-- Header -->
<div id="top-nav" class="navbar navbar-inverse navbar-static-top print-hide">
    <!--include('includes.header')-->
</div>
<!-- /Header -->

<!-- Main -->
<div class="container-fluid">
    <!-- Left Side-->
    <div class="row">
        <div class="col-sm-2">
            @include('includes.leftside')
        </div>
        <!-- /col-3 -->
        <div class="col-sm-10">
            <!-- column 2 -->
            <a href="#"><strong><i class="glyphicon glyphicon-dashboard"></i> My Dashboard</strong></a>
            <hr>
                @yield('content')
        </div>
        <!--/col-span-9-->

    </div>
</div>
<!-- /Main End -->

@include('includes.footer')
</body>
</html>