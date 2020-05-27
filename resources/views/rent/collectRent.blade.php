@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Collect rent <span class="badge badge-info"><i class="fas fa-user"></i> {{$people->people_name}}</span></div>
                <div class="card-body">
                    {!! Form::open(['action' => 'RentsController@store', 'method' => 'POST']) !!}
                    
                    @foreach($services as $service)
                    <div class="form-group">
                        {{ Form::label($service->service_name,'',['class' => 'sr-only']) }}
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">{{$service->service_name}}</div>
                            </div>
                            <input type="hidden" name="payment_services[]" value="{{$service->id}}">
                            {{ Form::number('payment_money[]',$service->service_money,['class' => 'form-control', 'placeholder' => 'eg. 1000', 'id' => $service->service_name]) }}
                        </div>
                    </div>
                    @endforeach
                    <!-- <hr>
                    <div class="form-group">
                        <label class="sr-only"></label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Total amount</div>
                            </div>
                            <input type="number" name="" class="form-control" disabled value="6690">
                        </div>
                    </div> -->
                    <input type="hidden" name="people_id" value="{{$people->id}}">
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