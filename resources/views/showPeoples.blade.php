@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">All peoples <a href="peoples/create" class="btn btn-primary float-right">Add new people</a></div>
                <div class="card-body">
                    @if(count ($peoples) > 0)
                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Contact</th>
                                <th scope="col">Other Contact</th>
                                <th scope="col">Home address</th>
                                <th scope="col">Employement</th>
                                <th scope="col">Total person living</th>
                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            @foreach($peoples as $people)
                                <tr>
                                <th scope="row">{{$i++}}</th>
                                <td>{{$people->people_name}}</td>
                                <td>{{$people->people_contact}}</td>
                                <td>{{$people->people_contact_other}}</td>
                                <td>{{$people->people_home_address}}</td>
                                <td>
                                    @if($people->people_designation == 0)
                                    Student
                                    @elseif($people->people_designation == 1)
                                    Officer
                                    @elseif($people->people_designation == 2)
                                    Worker
                                    @else
                                    Jobless
                                    @endif
                                </td>
                                <td>{{$people->people_total}}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                            <a href="/peoples/{{ $people->id }}/edit" class="btn btn-primary">Edit</a>
                                        {!! Form::open(['action' => ['PeoplesController@destroy', $people->id ],'method' => 'POST',]) !!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete',['class' => 'btn btn-dark'])}}
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