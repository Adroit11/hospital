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

    <!-- Complain-->
    <div class="form-group">
        {{ Form::label('sponser_id', 'sponser_id', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('sponser_id', null, array('class' => 'form-control', 'placeholder'=>'Patient Name')) }}
        </div>
    </div>

    <!-- Observation-->
    <div class="form-group">
        {{ Form::label('bill_type', 'Obill_type', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('bill_type', null, array('class' => 'form-control', 'placeholder'=>'Date of Birth')) }}
        </div>
    </div>

    <!-- Comment-->
    <div class="form-group">
        {{ Form::label('transaction_status', 'transaction_status', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('transaction_status', null, array('class' => 'form-control', 'placeholder'=>'Gender')) }}
        </div>
    </div>

    <!-- lab-->
    <div class="form-group">
        {{ Form::label('con_id', 'con_id', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('con_id', null, array('class' => 'form-control', 'placeholder'=>'Region')) }}
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