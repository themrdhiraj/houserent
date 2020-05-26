@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">All services <span class="badge badge-info badge-pill">{{count($services)}}</span> <a href="services/create" class="btn btn-primary float-right">Add services</a></div>
                <div class="card-body">
                    @if(count ($services) > 0)
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Service</th>
                                <th scope="col">Money</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i = 1; @endphp
                            @foreach($services as $service)
                            <tr>
                                <th scope="row">{{$i++}}</th>
                                <td>{{$service->service_name}}</td>
                                <td>Rs. {{$service->service_money}} |-</td>
                                <td>
                                        <a href="/services/{{ $service->id }}/edit" class="btn btn-primary">Edit</a>
                                        <br><br>
                                        {!! Form::open(['action' => ['HouseServices@destroy', $service->id ],'method' => 'POST',]) !!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Delete',['class' => 'btn btn-dark','onclick' => 'return confirm("Are you sure want to delete?")'])}}
                                        {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$services->links()}}
                    @else
                    No services added yet!!!
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection