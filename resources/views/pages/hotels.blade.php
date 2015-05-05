@extends('app')

@section('content')

<div class="container">
    <div class="row" style="padding-top: 20px;">
        <div class="col-md-8 ">  
            <h4>Hotels</h4>
        </div>
        <div class="col-md-4 text-right">
            <a class="btn btn-success" href="admin/add_hotels"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add New</a>
        </div>
    </div>
    <hr>
    {!! str_replace('/?', '?', $grid) !!}
</div>

@stop
