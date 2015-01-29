@extends('layouts.dash')
@section('content')
@include('includes.message')
<div class="dash-bg">
    <div class="row">

        <div class="col-md-3 ">
            <a href="{{ URL::asset('patient/create') }}">
                <div class="panel panel-primary dash-panel">
                    <div class="panel-heading">REGISTER PATIENT</div>
                    <div class="panel-body">
                        {{ HTML::image('images/assetadd.png', null, array('class' => 'img-rounded img-responsive dash-img')) }}
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-3">
            <a href="{{ URL::asset('consultation/create') }}">
                <div class="panel panel-primary dash-panel">
                    <div class="panel-heading">CONSULTATION</div>
                    <div class="panel-body">
                        {{ HTML::image('images/editor.png', null, array('class' => 'img-rounded img-responsive dash-img')) }}
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-3">
            <a href="{{ URL::asset('payment/create') }}">
                <div class="panel panel-primary dash-panel">
                    <div class="panel-heading">PAYMENT</div>
                    <div class="panel-body">
                        {{ HTML::image('images/payment.png', null, array('class' => 'img-rounded img-responsive dash-img')) }}
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-3">
            <a href="{{ URL::asset('user/create') }}">
                <div class="panel panel-primary dash-panel">
                    <div class="panel-heading">USER MANAGER</div>
                    <div class="panel-body">
                        {{ HTML::image('images/user.png', null, array('class' => 'img-rounded img-responsive dash-img')) }}
                    </div>
                </div>
            </a>
        </div>

    </div>

    <div class="row">

        <div class="col-md-3">
            <a href="{{ URL::asset('item/create') }}">
                <div class="panel panel-primary">
                    <div class="panel-heading dash-panel">ITEM</div>
                    <div class="panel-body">
                        {{ HTML::image('images/common.png', null, array('class' => 'img-rounded img-responsive dash-img')) }}
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-3">
            <a href="{{ URL::asset('result/create') }}">
                <div class="panel panel-primary dash-panel">
                    <div class="panel-heading">LAB RESULT</div>
                    <div class="panel-body">
                        {{ HTML::image('images/lab.png', null, array('class' => 'img-rounded img-responsive dash-img')) }}
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-3">
            <a href="{{ URL::asset('sponser/create') }}">
                <div class="panel panel-primary dash-panel">
                    <div class="panel-heading">SPONSOR</div>
                    <div class="panel-body">
                        {{ HTML::image('images/common.png', null, array('class' => 'img-rounded img-responsive dash-img')) }}
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-3">
            <a href="{{ URL::asset('forms/items') }}">
                <div class="panel panel-primary dash-panel">
                    <div class="panel-heading">**REPORTS</div>
                    <div class="panel-body">
                        {{ HTML::image('images/report.png', null, array('class' => 'img-rounded img-responsive dash-img')) }}
                    </div>
                </div>
            </a>
        </div>

    </div>
</div>
@stop