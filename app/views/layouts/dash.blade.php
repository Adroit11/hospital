
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
        <div class="col-md-2">
            <!--include left menu space-->
        </div>
        <!-- /col-3 -->
        <div class="col-md-8">
            <!-- column 2 -->
            <div class ="print-hide dash-title">
                    TPA  OFFICE FURNITURE AND EQUIPMENTS </br> INVENTORY SYSTEM
                </div>
            <hr>
            @yield('content')
        </div>
        <!--/col-span-9-->
        <div class="col-md-2">
        </div>

    </div>
</div>
<!-- /Main End -->

@include('includes.footer')
