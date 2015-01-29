@extends('layouts.log')
@section('content')

<!-- if there are creation errors, they will show here -->
@include('includes.message')

<ul>
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
{{ Form::open(array('url'=>'login', 'class'=>'form-signin','role'=>'form')) }}
<h2 class="form-signin-heading">Please Log in</h2>
<!-- Name-->
<div class="form-group">
    {{ Form::label('name', 'Name', array('class' => 'sr-only control-label')) }}
    <div>
        {{ Form::text('name', null, array('class' => 'form-control', 'placeholder'=>'Name')) }}
    </div>
</div>

<!-- Password-->
<div class="form-group">
    {{ Form::label('password', 'Password', array('class' => 'sr-only control-label')) }}
    <div>
        {{ Form::password('password', array('class' => 'form-control', 'placeholder'=>'Passwor')) }}
    </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
    <div>
        <button type="submit"  class="btn btn-primary btn-block btn-lg">Log In</button>
    </div>
</div>
{{ Form::close() }}

@stop