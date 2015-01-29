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
    <div class="form-title">Add Sponsor</div>
    {{ Form::open(array('url'=>'sponser', 'class'=>'form-horizontal','role'=>'form')) }}

    <!-- name-->
    <div class="form-group">
        {{ Form::label('name', 'Title', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('name', null, array('class' => 'form-control', 'placeholder'=>'Sponser Name')) }}
        </div>
    </div>

    <!-- results-->
    <div class="form-group">
        {{ Form::label('code', 'Code', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('code', null, array('class' => 'form-control', 'placeholder'=>'code')) }}
        </div>
    </div>

    <!-- name-->
    <div class="form-group">
        {{ Form::label('tel', 'Tel', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('tel', null, array('class' => 'form-control', 'placeholder'=>'Tel')) }}
        </div>
    </div>

    <!-- address-->
    <div class="form-group">
        {{ Form::label('address', 'Address', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('address', null, array('class' => 'form-control', 'placeholder'=>'Address')) }}
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