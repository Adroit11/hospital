@extends('layouts.form')
@section('content')
<!-- if there are creation errors, they will show here -->
@include('includes.message')

<div class="form-bg">
    <div class="form-title">Add New Employee</div>

{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url'=>'user', 'class'=>'form-horizontal','role'=>'form')) }}

    <!-- Name input-->
    <div class="form-group">
        {{ Form::label('name', 'Name', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('name', null, array('class' => 'form-control', 'placeholder'=>'Employee Name')) }}
        </div>
    </div>

    <!-- Number input-->
    <div class="form-group">
        {{ Form::label('number', 'Emp.No', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('number', null, array('class' => 'form-control', 'placeholder'=>'Employee Number')) }}
        </div>
    </div>

    <!-- Select role -->
    <div class="form-group">
        {{ Form::label('type', 'Role', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::select('type', array('' => 'Select Employee role', '1' => 'Dorctor', '2' => 'Nurse', '3' => 'Accountant'),null, array('class' => 'form-control')) }}
        </div>
    </div>

    <!-- Title input-->
    <div class="form-group">
        {{ Form::label('title', 'Title', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-10">
            Mr. {{ Form::radio('title', 'Mr. ', true, array('class'=>'radio-inline'));}}
              Mrs. {{ Form::radio('title', 'Mrs. ', false, array('class'=>'radio-inline'));}}
              Miss. {{ Form::radio('title', 'Miss. ', false, array('class'=>'radio-inline'));}}
        </div>
    </div>

    <!-- Password input-->
    <div class="form-group">
        {{ Form::label('password', 'Password', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::password('password', array('class' => 'form-control', 'placeholder'=>'password')) }}
        </div>
    </div>

    <!-- Password input-->
    <div class="form-group">
        {{ Form::label('password_confirmation', 'Re-Password', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::password('password_confirmation', array('class' => 'form-control', 'placeholder'=>'re-password')) }}
        </div>
    </div>

    <!-- Select level -->
    <div class="form-group">
        {{ Form::label('level', 'Level', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::select('level', array('' => 'select user level', '1' => 'Normal user', '2' => 'Advance User', '3' => 'Administrator'),null, array('class' => 'form-control')) }}
        </div>
    </div>
    <!-- Button (Double) -->
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit"  class="btn btn-success">Save</button>
            <a class="btn btn-warning" href="{{ URL::to('user') }}">Cancel</a>
        </div>
    </div>

{{ Form::close() }}
</div>
@stop