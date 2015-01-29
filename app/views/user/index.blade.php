@extends('layouts.form')
@section('content')

<p class="index-title">
    Users
    <a class="btn btn-lg btn-success pull-right" href="{{ URL::to('users/create') }}"><i class="glyphicon glyphicon-plus"></i> ADD NEW USER </a>
</p>

<!-- will be used to show any messages -->
@include('includes.message')
<?php $index = 1 ;?>
<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <td class="col-md-1">Index</td>
        <td class="col-md-3">Name</td>
        <td class="col-md-3">Email</td>
        <td class="col-md-1">Level</td>
        <td class="col-md-1">Active</td>
        <td class="col-md-3">Action</td>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user => $value)
    <tr>
        <td>{{ $index++ }}</td>
        <td>{{ $value->name }}</td>
        <td>{{ $value->email }}</td>
        <td>{{ $value->level }}</td>
        <td>{{ $value->activated }}</td>
        <!-- we will also add show, edit, and delete buttons -->
        <td>
            <a class="btn btn-xs btn-info" href="{{ URL::to('users/' . $value->id . '/edit') }}">Edit</a>

            {{ Form::open(array('url' => 'users/' . $value->id, 'class' => 'pull-right')) }}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Delete', array('class' => 'btn btn-xs btn-danger')) }}
            {{ Form::close() }}
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
@stop