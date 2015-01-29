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
        <div class="col-sm-2 print-hide">
            @include('includes.leftside')
        </div>
            <div class="col-md-8">
               <!-- column 2 -->


                   @yield('content')
            </div>
        <!--/col-span-9-->
        <div class="col-md-2  print-hide">
            <!--include right menu space-->
            </div>
    </div>
</div>
<!-- /Main End -->

@include('includes.footer')