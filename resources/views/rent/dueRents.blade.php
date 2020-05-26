@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Due rents</div>
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
                                    <td><a href="/rents/{{$people->id}}" class="btn btn-dark"><i class="fas fa-money-check-alt"></i> Receive payment</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @else
                    No peoples added yet!!!
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection