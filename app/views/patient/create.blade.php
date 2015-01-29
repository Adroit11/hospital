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
    <div class="form-title">PATIENT REGISTRATION FORM</div>
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
        <div class="col-sm-4">
            <input type="date" name="dob" class="form-control">
        </div>

     <!-- Gender-->
        {{ Form::label('gender', 'Gender', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-4">
            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-default">
                    <input type="radio" name="gender" value="MALE"> MALE
                </label>
                <label class="btn btn-default">
                    <input type="radio" name="gender" value="FEMALE"> FEMALE
                </label>
            </div>
        </div>
    </div>

    <!-- tel-->
    <div class="form-group">
        {{ Form::label('tel', 'Tel', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-4">
            {{ Form::text('tel', null, array('class' => 'form-control', 'placeholder'=>'Telephone Number')) }}
        </div>

        <!-- email-->
        {{ Form::label('email', 'e-mail', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-4">
            {{ Form::text('email', null, array('class' => 'form-control', 'placeholder'=>'email')) }}
        </div>
    </div>


    <!-- region-->
    <div class="form-group">
        {{ Form::label('region', 'Region', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-4">
            {{ Form::text('region', null, array('class' => 'form-control', 'placeholder'=>'Region')) }}
        </div>

     <!-- district-->
        {{ Form::label('district', 'District', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-4">
            {{ Form::text('district', null, array('class' => 'form-control', 'placeholder'=>'District')) }}
        </div>
    </div>

    <div class="form-group">
     <!-- ward-->
        {{ Form::label('ward', 'Ward', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-5">
            {{ Form::text('ward', null, array('class' => 'form-control', 'placeholder'=>'Ward')) }}
        </div>
    </div>

    <!-- sponser-->
    <div class="form-group">
        {{ Form::label('sponser', 'Sponser', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-4">
            {{ Form::text('sponser', null, array('class' => 'form-control', 'placeholder'=>'sponser')) }}
        </div>


      <!-- memberNo-->
        {{ Form::label('memberNo', 'Member No.', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-4">
            {{ Form::text('memberNo', null, array('class' => 'form-control', 'placeholder'=>'Member Number')) }}
        </div>
    </div>


    <!-- job-->
    <div class="form-group">
        {{ Form::label('occupation', 'Occupation', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-5">
            {{ Form::text('occupation', null, array('class' => 'form-control', 'placeholder'=>'Occupation')) }}
        </div>
    </div>

    <!-- emergency-->
    <div class="form-group">
        {{ Form::label('emerg_tel', 'Emergency Tel', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-4">
            {{ Form::text('emerg_tel', null, array('class' => 'form-control', 'placeholder'=>'Emergency Contacts')) }}
        </div>


    <!-- dob-->
        {{ Form::label('emerg_name', 'Emergency Name', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-4">
            {{ Form::text('emerg_name', null, array('class' => 'form-control', 'placeholder'=>'Emergence contact name')) }}
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