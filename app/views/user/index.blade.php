@extends('layouts.form')
@section('content')

<p class="index-title">
    Employee List
    <a class="btn btn-lg btn-success pull-right" href="{{ URL::to('user/create') }}"><i class="glyphicon glyphicon-plus"></i> ADD NEW USER </a>
</p>

<!-- will be used to show any messages -->
@include('includes.message')
<?php $index = 1 ;?>
<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <td class="col-md-1">Index</td>
        <td class="col-md-3">Name</td>
        <td class="col-md-3">Number</td>
        <td class="col-md-1">Level</td>
        <td class="col-md-2">Role</td>
        <td class="col-md-2">Action</td>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user => $value)
    <tr>
        <td>{{ $index++ }}</td>
        <td>{{ $value->title.$value->name }}</td>
        <td>{{ $value->number }}</td>
        <td>{{ $value->level }}</td>
        <td>{{ $value->type }}</td>
        <!-- we will also add show, edit, and delete buttons -->
        <td>
            <a class="btn btn-xs btn-info" href="{{ URL::to('user/' . $value->id . '/edit') }}">Edit</a>

            {{ Form::open(array('url' => 'user/' . $value->id, 'class' => 'pull-right')) }}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Delete', array('class' => 'btn btn-xs btn-danger')) }}
            {{ Form::close() }}
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
@stop