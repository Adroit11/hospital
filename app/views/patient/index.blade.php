@extends('layouts.report')
@section('content')
<p class="index-title">
    Patients List
    <a class="btn btn-lg btn-success pull-right" href="{{ URL::to('patient/create') }}"><i class="glyphicon glyphicon-plus"></i> ADD PATIENT </a>
</p>


<!-- will be used to show any messages -->
@include('includes.message')
<?php $index = 1 ;?>

<table class="table table-striped table-bordered table-bg">
    <thead>
    <tr>
        <td class="col-md-1">Index</td>
        <td class="col-md-2">NAME</td>
        <td class="col-md-2">GENDER</td>
        <td class="col-md-1">SPONSOR</td>
        <td class="col-md-2">MEMBER No</td>
        <td class="col-md-2">TEL</td>
        <td class="col-md-2">ACTION</td>
    </tr>
    </thead>
    <tbody>
    @foreach($patients as $patient => $value)
    <tr>
        <td>{{ $index++ }}</td>
        <td>{{ $value->name }}</td>
        <td>{{ $value->gender}}</td>
        <td>{{ $value->sponsor_id}}</td>
        <td>{{ $value->member_no}}</td>
        <td>{{ $value->tel }}</td>

        <td>

            <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
            <a class="btn btn-xs btn-info" href="{{ URL::to('patient/' . $value->id . '/edit') }}">Edit</a>

            <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
            <a class="btn btn-xs btn-success" href="{{ URL::to('patient/' . $value->id) }}">Show</a>

            <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
            <!-- we will add this later since its a little more complicated than the other two buttons -->
            <!--{{ Form::open(array('url' => 'forms/assets/' . $value->id, 'class' => 'pull-right')) }}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::button('Delete', array('class' => 'btn btn-xs btn-danger', 'id'=>'del')) }}
            {{ Form::close() }}-->

        </td>
    </tr>
    @endforeach
    </tbody>
</table>

@stop