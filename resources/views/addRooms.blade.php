@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Room planning <span class="badge badge-danger">Only for owners</span></div>
                <div class="card-body">
                    {!! Form::open(['action' => 'HouseServices@store', 'method' => 'POST']) !!}
                        <div class="form-group">
                            {{ Form::label('room_floor','Floors',['class' => 'sr-only']) }}
                            <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text">Floors</div>
                            </div>
                            {{ Form::number('room_floor','',['class' => 'form-control', 'placeholder' => 'eg. 3', 'id' => 'room_floor']) }}
                        </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label('room_total','Rooms',['class' => 'sr-only']) }}
                            <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text">Rooms <span class="badge badge-info">Total rooms in house</span></div>
                            </div>
                            {{ Form::number('room_total','',['class' => 'form-control', 'placeholder' => 'eg. 12', 'id' => 'room_total']) }}
                        </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label('room_condition','Room condition',['class' => 'sr-only']) }}
                            <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text">Room condition</div>
                            </div>
                            {{Form::select('room_condition', array('0' => 'Poor', '1' => 'Good', '2' => 'Better', '3' => 'Excellent'), '0',['class' => 'form-control', 'id' => 'room_condition'])}}
                        </div>
                        </div>
                        <div class="form-group">
                            {{Form::label('room_price','Room price',['class' => 'sr-only'])}}
                            <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text">Room price <span class="badge badge-warning">Just to verify</span></div>
                            </div>
                            {{Form::number('room_price','',['class' => 'form-control', 'placeholder' => 'eg. 5000', 'id' => 'room_price'])}}
                        </div>
                        </div>

                        <div class="form-group">
                            {{Form::submit('Update',['class' => 'btn btn-primary'])}}
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection