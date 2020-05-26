@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card">
            <img width="100"  src="{{asset('img/img_avatar.png')}}" class="card-img-top" alt="{{$people->people_name}}">
            
            <div class="card-body">
                <h4 class="card-title"><b><i class="fas fa-user"></i> Name :</b> {{$people->people_name}}
                <span class="badge badge-warning badge-pill">
                    <i class="fas fa-briefcase"></i>
                    @if($people->people_designation == 0)
                    Student
                    @elseif($people->people_designation == 1)
                    Officer
                    @elseif($people->people_designation == 2)
                    Worker
                    @else
                    Jobless
                    @endif
                </span>
                </h4>
                <hr>
                <h6 class="card-title"><b><i class="fas fa-phone"></i> Contact :</b> {{$people->people_contact}} <a href="tel:{{$people->people_contact}}" class="badge badge-info"><i class="fas fa-phone-volume"></i> Call</a></h6>
                <h6 class="card-title"><b><i class="fas fa-phone"></i> Other Contact :</b> {{$people->people_contact_other}}<a href="tel:{{$people->people_contact_other}}" class="badge badge-info"><i class="fas fa-phone-volume"></i> Call</a></h6>
                <h6 class="card-title"><b><i class="fas fa-home"></i> Home address :</b> {{$people->people_home_address}}</h6>
                <h6 class="card-title"><b><i class="fas fa-users"></i> Family :</b> {{$people->people_total}}</h6>
                <h6 class="card-title"><b><i class="fas fa-building"></i> Room {{$people->people_selected_room}} of floor {{$people->people_selected_floor}}</b></h6>
                <hr>
                <div class="btn-group" role="group">
                    <a href="/peoples/{{ $people->id }}/edit" class="btn btn-primary">Edit</a>
                    {!! Form::open(['action' => ['PeoplesController@destroy', $people->id ],'method' => 'POST',]) !!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete',['class' => 'btn btn-dark','onclick' => 'return confirm("Are you sure want to delete?")'])}}
                    
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection