
@include('includes.head')
<body>
<!-- Header -->
<div id="top-nav" class="navbar navbar-inverse navbar-static-top print-hide">
    @include('includes.header')
</div>
<!-- /Header -->

<!-- Main -->
<div class="container-fluid">
    <!-- Left Side-->
    <div class="row">
        <div class="col-md-2 print-hide">
            @include('includes.leftside')
        </div>
        <!-- /col-3 -->
        <div class="col-md-8">
            <!-- column 2 -->
            <div class ="print-hide">
                <a class="btn btn-lg btn-info" href="{{ URL::asset('dashboard') }}"><strong>
                        <i class="glyphicon glyphicon-th-large"></i> My Dashboard</strong></a>
                <a class="btn btn-lg btn-info" href="javascript:window.history.back()">
                    <i class="glyphicon glyphicon-arrow-left"></i>  Go Back </a>
            </div>
            <hr>
            @yield('content')
        </div>
        <!--/col-span-9-->

        <div class="col-md-2 print-hide">
            <!--include right side menu-->
        </div>

    </div>
</div>
<!-- /Main End -->

@include('includes.footer')