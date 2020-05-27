@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Add Person <span class="badge badge-info">For room {{ app('request')->input('room') }} of floor {{ app('request')->input('floor') }}</span></div>
                <div class="card-body">
                    {!! Form::open(['action' => 'PeoplesController@store', 'method' => 'POST']) !!}
                    <div class="form-group">
                        {{ Form::label('people_name','Name',['class' => 'sr-only']) }}
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Name</div>
                            </div>
                            {{ Form::text('people_name','',['class' => 'form-control', 'placeholder' => 'eg. Joe', 'id' => 'people_name']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('people_contact','Contact',['class' => 'sr-only']) }}
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Contact</div>
                            </div>
                            {{ Form::tel('people_contact','',['class' => 'form-control', 'placeholder' => 'eg. 98XXXXXXXX', 'id' => 'people_contact', 'pattern' => '[0-9]{10}']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('people_contact_other','Other contact',['class' => 'sr-only']) }}
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Other contact</div>
                            </div>
                            {{ Form::tel('people_contact_other','',['class' => 'form-control', 'placeholder' => 'eg. 98XXXXXXXX', 'id' => 'people_contact_other', 'pattern' => '[0-9]{10}']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('people_home_address','Home address',['class' => 'sr-only']) }}
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Home address</div>
                            </div>
                            {{ Form::text('people_home_address','',['class' => 'form-control', 'placeholder' => 'eg. Ramechhap', 'id' => 'people_home_address']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{Form::label('people_designation','Total persons living',['class' => 'sr-only'])}}
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">This person is a</div>
                            </div>
                            {{Form::select('people_designation', array('0' => 'Student', '1' => 'Officer', '2' => 'Worker', '3' => 'Jobless'), '0',['class' => 'form-control', 'id' => 'people_designation'])}}
                        </div>
                    </div>
                    <div class="form-group">
                        {{Form::label('people_total','Total persons living',['class' => 'sr-only'])}}
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Total persons living</div>
                            </div>
                            {{Form::number('people_total','',['class' => 'form-control', 'placeholder' => 'eg. 5', 'id' => 'people_total'])}}
                        </div>
                    </div>
                    <input type="hidden" name="people_selected_floor" value="{{ app('request')->input('floor') }}">
                    <input type="hidden" name="people_selected_room" value="{{ app('request')->input('room') }}">
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