
@include('includes.head')
<body>
<!-- Header -->
<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
    @include('includes.header')
</div>
<!-- /Header -->

<!-- Main -->
<div class="container-fluid">
    <!-- Left Side-->
    <div class="row">
        <div class="col-sm-4">
        </div>
        <!-- /col-3 -->
        <div class="col-sm-4">
            <!-- column 2 -->
            @yield('content')
        </div>
        <!--/col-span-9-->
        <div class="col-sm-4">
        </div>

    </div>
</div>
<!-- /Main End -->

@include('includes.footer')
</body>
</html>