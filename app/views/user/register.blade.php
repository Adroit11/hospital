@extends('layouts.form')
@section('content')

<!--{{ Form::open(array('url'=>'users/create', 'class'=>'form-signup')) }}
<h2 class="form-signup-heading">Please Register</h2>

<ul>
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>

{{ Form::text('firstname', null, array('class'=>'input-block-level', 'placeholder'=>'First Name')) }}
{{ Form::text('lastname', null, array('class'=>'input-block-level', 'placeholder'=>'Last Name')) }}
{{ Form::text('email', null, array('class'=>'input-block-level', 'placeholder'=>'Email Address')) }}
{{ Form::password('password', array('class'=>'input-block-level', 'placeholder'=>'Password')) }}
{{ Form::password('password_confirmation', array('class'=>'input-block-level', 'placeholder'=>'Confirm Password')) }}

{{ Form::submit('Register', array('class'=>'btn btn-large btn-primary btn-block'))}}
{{ Form::close() }}-->
        {{ Form::open(array('url'=>'users/create', 'class'=>'form-horizontal','role'=>'form')) }}
            <h2 class="form-signup-heading">Add New User</h2>

@include('includes.message')

<ul>
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
            <!-- Name input-->
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">User Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" placeholder="user name">
                </div>
            </div>

            <!-- Email input-->
            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" placeholder="user email">
                </div>
            </div>

            <!-- Password input-->
            <div class="form-group">
                <label for="password" class="col-sm-2 control-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
            </div>

            <!-- Password input-->
            <div class="form-group">
                <label for="password_confirmation" class="col-sm-2 control-label">Re-Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Repeat Password">
                </div>
            </div>

            <div class="form-group">
                <label for="user_level" class="col-sm-2 control-label">User Level</label>
                <div class="col-sm-10">
                  {{ Form::select('user_level', array('0' => 'Select User Level', '1' => 'Normal user', '2' => 'Advance User', '3' => 'Administrator'),null, array('class' => 'form-control')) }}
                </div>
            </div>

            <!-- Button (Double) -->
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit"  class="btn btn-success">Save</button>
                    <button id="cancel" name="cancel" class="btn btn-danger">Cancel</button>
                </div>
            </div>

        {{ Form::close() }}
@stop