@extends('layouts.form')
@section('content')
<!-- if there are creation errors, they will show here -->
@include('includes.message')

{{ HTML::ul($errors->all()) }}
<div class="form-bg">
    <div class="form-title">Edit User: {{ $user->name }}</div>

{{ Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT', 'class'=>'form-horizontal')) }}

<div class="form-group">
    {{ Form::label('name', 'Name', array('class' => 'col-sm-2 control-label')) }}
    <div class="col-sm-10">
        {{ Form::text('name', null, array('class' => 'form-control', 'placeholder'=>'name')) }}
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
        {{ Form::select('level', array('0' => 'Select User Level', '1' => 'Normal user', '2' => 'Advance User', '3' => 'Administrator'),null, array('class' => 'form-control')) }}
    </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <button type="submit"  class="btn btn-success">Save</button>
        <a class="btn btn-warning" href="{{ URL::to('users') }}">Cancel</a>
    </div>
</div>

{{ Form::close() }}
    </div>
@stop