@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card">
            <img src="{{asset('img/img_avatar.png')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$user->name}}<span class="badge badge-info badge-pill">Owner</span></h5>
                {!! Form::open(['action' => 'HomeController@floorUpdate', 'method' => 'POST']) !!}
                <div class="form-group">
                    {{ Form::label('total_floors','Floors',['class' => 'sr-only']) }}
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Floors</div>
                        </div>
                        {{Form::select('total_floors', array('1' => 'I want to rent only 1 floor of my building', '2' => 'I want to rent 2 floors of my building', '3' => 'I want to rent 3 floors of my building', '4' => 'I want to rent 4 floors of my building', '5' => 'I want to rent 5 floors of my building'), isset($user->total_floors) ? $user->total_floors : '1',['class' => 'form-control', 'id' => 'total_floors'])}}
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('room_total','Rooms',['class' => 'sr-only']) }}
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Rooms</div>
                        </div>
                        {{ Form::number('total_rooms',isset($user->total_rooms) ? $user->total_rooms : '0',['class' => 'form-control', 'placeholder' => 'eg. 12', 'id' => 'total_rooms']) }}
                    </div>
                </div>
                <div class="form-group">
                    {{Form::submit('Change',['class' => 'btn btn-primary'])}}
                </div>
                {{Form::hidden('_method','GET')}}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection