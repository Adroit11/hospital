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
        {{ Form::label('type', 'Item Type', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('type', null, array('class' => 'form-control', 'placeholder'=>'Item Type')) }}
        </div>
    </div>

    <!-- code-->
    <div class="form-group">
        {{ Form::label('code', 'Item Code', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('code', null, array('class' => 'form-control', 'placeholder'=>'Code')) }}
        </div>
    </div>

    <!-- Comment-->
    <div class="form-group">
        {{ Form::label('unit', 'Unit', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('unit', null, array('class' => 'form-control', 'placeholder'=>'Item Unit')) }}
        </div>
    </div>

    <!-- lab-->
    <div class="form-group">
        {{ Form::label('name', 'Item Name', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('name', null, array('class' => 'form-control', 'placeholder'=>'Item Name')) }}
        </div>
    </div>

    <!-- code-->
    <div class="form-group">
        {{ Form::label('price', 'Price', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('price', null, array('class' => 'form-control', 'placeholder'=>'Price')) }}
        </div>
    </div>

    <!-- Comment-->
    <div class="form-group">
        {{ Form::label('status', 'Status', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('status', null, array('class' => 'form-control', 'placeholder'=>'Status')) }}
        </div>
    </div>

    <!-- lab-->
    <div class="form-group">
        {{ Form::label('con_type', 'Constration', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('con_type', null, array('class' => 'form-control', 'placeholder'=>'Constration')) }}
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