@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">All peoples <a href="/peoples/create" class="btn btn-primary float-right">Add new people</a></div>
                <div class="card-body">
                    @if(count ($peoples) > 0)
                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 1 @endphp
                                @foreach($peoples as $people)
                                <tr>
                                    <th scope="row">{{$i++}}</th>
                                    <td>{{$people->people_name}}</td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            {!! Form::open(['action' => ['PeoplesController@show', $people->id ],'method' => 'POST',]) !!}
                                            {{Form::submit('View profile',['class' => 'btn btn-primary'])}}
                                            {{Form::hidden('_method','GET')}}
                                            {!! Form::close() !!}
                                            {!! Form::open(['action' => ['RentsController@paidRents', $people->id ],'method' => 'POST',]) !!}
                                            {{Form::submit('Payment Details',['class' => 'btn btn-dark'])}}
                                            {{Form::hidden('_method','GET')}}
                                            {!! Form::close() !!}
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{$peoples->links()}}
                    @else
                    No peoples added yet!!!
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection