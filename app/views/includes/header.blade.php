<!-- container -->
<div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">TPA  OFFICE FURNITURE AND EQUIPMENTS INVENTORY SYSTEM</a>
    </div>
    <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">

            <li><a href="#" style="color: #000000"><i class="glyphicon glyphicon-user"></i>  {{Session::get('myName')}}</a></li>
            <li><a href="{{URL::asset('logout')}}" style="color: #000000"><i class="glyphicon glyphicon-lock"></i> Logout</a></li>
        </ul>
    </div>
</div>
<!-- /container -->