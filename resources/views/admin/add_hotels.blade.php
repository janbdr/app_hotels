@extends('app')

@section('content')
      
    <div class="container">
        <div class="row" style="padding-top: 20px;">
            <div class="col-md-8 ">  
                <h4>Add Hotels</h4>
            </div>
            <div class="col-md-4 text-right">
                <a class="btn btn-success" href="../hotels"><span class="glyphicon glyphicon-th-large" aria-hidden="true"></span> View All</a>
            </div>
        </div>
        <hr>
        
        {!! Form::open(['url' => 'hotels','class'=>'form-horizontal']) !!}
            <div class="form-group">
                <label class="control-label col-sm-2" for="name">Hotel Name:</label>
                <div class="col-sm-10">
                    {!! Form::text('name',null,['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="address">Address:</label>
                <div class="col-sm-10">          
                    {!! Form::text('address',null,['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="location">Location:</label>
                <div class="col-sm-10">          
                    {!! Form::text('location',null,['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="published_at">Publish On:</label>
                <div class="col-sm-10">          
                    {!! Form::input('date','published_at',date('Y-m-d'),['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">        
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        {!! Form::close() !!}
        <!--{{ var_dump($errors)}}-->
        @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
            
        </ul>
        @endif
    </div>
    
@stop
