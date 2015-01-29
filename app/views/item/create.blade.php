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
    <div class="form-title">Item</div>
    {{ Form::open(array('url'=>'item', 'class'=>'form-horizontal','role'=>'form')) }}

    <!-- Complain-->
    <div class="form-group">
        {{ Form::label('type', 'type', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('type', null, array('class' => 'form-control', 'placeholder'=>'Sponser Name')) }}
        </div>
    </div>

    <!-- code-->
    <div class="form-group">
        {{ Form::label('code', 'code', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('code', null, array('class' => 'form-control', 'placeholder'=>'Bill Type')) }}
        </div>
    </div>

    <!-- Comment-->
    <div class="form-group">
        {{ Form::label('unit', 'unit', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('unit', null, array('class' => 'form-control', 'placeholder'=>'Transaction Status')) }}
        </div>
    </div>

    <!-- lab-->
    <div class="form-group">
        {{ Form::label('name', 'name', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('name', null, array('class' => 'form-control', 'placeholder'=>'Region')) }}
        </div>
    </div>

    <!-- code-->
    <div class="form-group">
        {{ Form::label('price', 'price', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('price', null, array('class' => 'form-control', 'placeholder'=>'Bill Type')) }}
        </div>
    </div>

    <!-- Comment-->
    <div class="form-group">
        {{ Form::label('status', 'status', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('status', null, array('class' => 'form-control', 'placeholder'=>'Transaction Status')) }}
        </div>
    </div>

    <!-- lab-->
    <div class="form-group">
        {{ Form::label('con_type', 'con_type', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('con_type', null, array('class' => 'form-control', 'placeholder'=>'Region')) }}
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