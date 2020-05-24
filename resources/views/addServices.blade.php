@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Add services</div>
                <div class="card-body">
                    {!! Form::open(['action' => 'HouseServices@store', 'method' => 'POST']) !!}
                        <div class="form-group">
                            {{ Form::label('service','Service',['class' => 'sr-only']) }}
                            <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text">Services</div>
                            </div>
                            {{ Form::text('service_name','',['class' => 'form-control', 'placeholder' => 'Water', 'id' => 'service']) }}
                        </div>
                        </div>
                        <div class="form-group">
                            {{Form::label('serviceMoney','Money',['class' => 'sr-only'])}}
                            <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text">Money <span class="badge badge-info">*per month</span></div>
                            </div>
                            {{Form::number('service_money','',['class' => 'form-control', 'placeholder' => '5000', 'id' => 'serviceMoney'])}}
                        </div>
                        </div>

                        <div class="form-group">
                            {{Form::submit('Submit',['class' => 'btn btn-primary'])}}
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection