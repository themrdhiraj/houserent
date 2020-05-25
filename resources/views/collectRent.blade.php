@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Add services</div>
                <div class="card-body">
                    {!! Form::open(['action' => 'RentsController@store', 'method' => 'POST']) !!}
                    
                    @foreach($services as $service)
                        <div class="form-group">
                        {{ Form::label($service->service_name,'',['class' => 'sr-only']) }}
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">{{$service->service_name}}</div>
                            </div>
                            {{ Form::number($service->id,$service->service_money,['class' => 'form-control', 'placeholder' => 'Water', 'id' => $service->service_name]) }}
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    {{ Form::checkbox($service->id,$service->service_money) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <input type="hidden" name="services[]" value="{{$service->id}}"> -->
                    @endforeach
                    <hr>
                    <div class="form-group">
                        {{Form::label('total_amount','',['class' => 'sr-only'])}}
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Total amount</div>
                            </div>
                            {{Form::text('total_amount','later',['class' => 'form-control', 'readonly', 'id' => 'serviceMoney'])}}
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