@extends('layouts.form')
@section('content')
@include('includes.message')

<ul>
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
<div class="form-bg">
    <div class="form-title">PAYMENTS FOR <br>{{$payment->name}}</div>
    {{ Form::model($payment, array('route' => array('payment.update', $payment->id), 'method' => 'PUT','class'=>'form-horizontal')) }}

    <!-- Complain-->
    <div class="form-group">
        {{ Form::label('sponser_id', 'Sponser Name', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('sponser_id', null, array('class' => 'form-control', 'placeholder'=>'Sponser Name')) }}
        </div>
    </div>

    <!-- Observation-->
    <div class="form-group">
        {{ Form::label('bill_type', 'Bill Type', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::select('bill_type', array('' => 'Select payment type', 'CASH' => 'CASH', 'SPONSOR' => 'CHEQUE', '3' => 'CHEQUE'),null, array('class' => 'form-control')) }}

        </div>
    </div>

    <!-- Comment-->
    <div class="form-group">
        {{ Form::label('transaction_status', 'Transaction Status', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('transaction_status', null, array('class' => 'form-control', 'placeholder'=>'Transaction Status')) }}
        </div>
    </div>

    <!-- lab-->
    <div class="form-group">
        {{ Form::label('con_id', 'con_id', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('con_id', null, array('class' => 'form-control', 'placeholder'=>'Consultation')) }}
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