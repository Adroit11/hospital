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
    <div class="form-title">PAYMENTS</div>
    {{ Form::open(array('url'=>'paymentlist', 'class'=>'form-horizontal','role'=>'form')) }}

    <!-- Complain-->
    <div class="form-group">
        {{ Form::label('checkin_type', 'checkin_type', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('checkin_type', null, array('class' => 'form-control', 'placeholder'=>'Sponser Name')) }}
        </div>
    </div>

    <!-- Observation-->
    <div class="form-group">
        {{ Form::label('patient_direction', 'patient_direction', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('patient_direction', null, array('class' => 'form-control', 'placeholder'=>'Bill Type')) }}
        </div>
    </div>

    <!-- Comment-->
    <div class="form-group">
        {{ Form::label('quantity', 'quantity', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('quantity', null, array('class' => 'form-control', 'placeholder'=>'Transaction Status')) }}
        </div>
    </div>

    <!-- lab-->
    <div class="form-group">
        {{ Form::label('bill_type', 'bill_type', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('bill_type', null, array('class' => 'form-control', 'placeholder'=>'Region')) }}
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