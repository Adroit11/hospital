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
    <div class="form-title">Result</div>
    {{ Form::open(array('url'=>'result', 'class'=>'form-horizontal','role'=>'form')) }}

    <!-- parameters-->
    <div class="form-group">
        {{ Form::label('parameters', 'parameters', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('parameters', null, array('class' => 'form-control', 'placeholder'=>'Sponser Name')) }}
        </div>
    </div>

    <!-- results-->
    <div class="form-group">
        {{ Form::label('results', 'results', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('results', null, array('class' => 'form-control', 'placeholder'=>'Bill Type')) }}
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