@extends('layouts.form')
@section('content')
<!-- if there are creation errors, they will show here -->
@include('includes.message')

<ul>
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
<div class="form-bg">
    <div class="form-title">REGISTER PATIENT</div>
{{ Form::open(array('url'=>'payment', 'class'=>'form-horizontal','role'=>'form')) }}

    <!-- Patient name-->
    <div class="form-group">
        {{ Form::label('name', 'Name', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('name', null, array('class' => 'form-control', 'placeholder'=>'Patient Name')) }}
        </div>
    </div>

    <!-- dob-->
    <div class="form-group">
        {{ Form::label('dob', 'DOB', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('dob', null, array('class' => 'form-control', 'placeholder'=>'Date of Birth')) }}
        </div>
    </div>

    <!-- Gender-->
    <div class="form-group">
        {{ Form::label('gender', 'Gender', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('gender', null, array('class' => 'form-control', 'placeholder'=>'Gender')) }}
        </div>
    </div>

    <!-- region-->
    <div class="form-group">
        {{ Form::label('region', 'Region', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('region', null, array('class' => 'form-control', 'placeholder'=>'Region')) }}
        </div>
    </div>

    <!-- district-->
    <div class="form-group">
        {{ Form::label('district', 'District', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('district', null, array('class' => 'form-control', 'placeholder'=>'District')) }}
        </div>
    </div>

    <!-- ward-->
    <div class="form-group">
        {{ Form::label('ward', 'Ward', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('ward', null, array('class' => 'form-control', 'placeholder'=>'Ward')) }}
        </div>
    </div>

    <!-- sponser-->
    <div class="form-group">
        {{ Form::label('sponser', 'Sponser', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('sponser', null, array('class' => 'form-control', 'placeholder'=>'sponser')) }}
        </div>
    </div>

    <!-- memberNo-->
    <div class="form-group">
        {{ Form::label('memberNo', 'Member No.', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('memberNo', null, array('class' => 'form-control', 'placeholder'=>'Member Number')) }}
        </div>
    </div>

    <!-- tel-->
    <div class="form-group">
        {{ Form::label('tel', 'Tel', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('tel', null, array('class' => 'form-control', 'placeholder'=>'Telephone Number')) }}
        </div>
    </div>

    <!-- email-->
    <div class="form-group">
        {{ Form::label('email', 'e-mail', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('email', null, array('class' => 'form-control', 'placeholder'=>'email')) }}
        </div>
    </div>

    <!-- job-->
    <div class="form-group">
        {{ Form::label('occupation', 'Occupation', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('occupation', null, array('class' => 'form-control', 'placeholder'=>'Occupation')) }}
        </div>
    </div>

    <!-- emergency-->
    <div class="form-group">
        {{ Form::label('emerg_tel', 'Emergency Tel', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('emerg_tel', null, array('class' => 'form-control', 'placeholder'=>'Emergency Contacts')) }}
        </div>
    </div>

    <!-- dob-->
    <div class="form-group">
        {{ Form::label('emerg_name', 'Emergency Name', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('emerg_name', null, array('class' => 'form-control', 'placeholder'=>'Date of Birth')) }}
        </div>
    </div>

    <!-- Button (Double) -->
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit"  class="btn btn-success">Save</button>
            <a class="btn btn-warning" href="{{ URL::to('forms/assets') }}">Cancel</a>
        </div>
    </div>
{{ Form::close() }}
</div>

@stop