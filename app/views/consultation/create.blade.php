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
    <div class="form-title">PATIENT CONSULTATION</div>
    {{ Form::open(array('url'=>'consultation', 'class'=>'form-horizontal','role'=>'form')) }}

    <!-- Complain-->
    <div class="form-group">
        {{ Form::label('complain', 'Complain', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('complain', null, array('class' => 'form-control', 'placeholder'=>'Complain')) }}
        </div>
    </div>

    <!-- Observation-->
    <div class="form-group">
        {{ Form::label('observation', 'Observation', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('observation', null, array('class' => 'form-control', 'placeholder'=>'Observation')) }}
        </div>
    </div>

    <!-- Comment-->
    <div class="form-group">
        {{ Form::label('comment', 'Comment', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('comment', null, array('class' => 'form-control', 'placeholder'=>'comment')) }}
        </div>
    </div>

    <!-- lab-->
    <div class="form-group">
        {{ Form::label('lab', 'Lab', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('lab', null, array('class' => 'form-control', 'placeholder'=>'lab')) }}
        </div>
    </div>

    <!-- process-->
    <div class="form-group">
        {{ Form::label('process', 'Process', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('process', null, array('class' => 'form-control', 'placeholder'=>'process')) }}
        </div>
    </div>

    <!-- signoff-->
    <div class="form-group">
        {{ Form::label('signoff', 'Signoff', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('signoff', null, array('class' => 'form-control', 'placeholder'=>'signoff')) }}
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