@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Paid rents <a href="/rents" class="btn btn-dark float-right">Collect rent</a></div>
                <div class="card-body">
                    @if(count ($peoples) > 0)
                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Service</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 1 @endphp
                                @foreach($peoples as $people)
                                <tr>
                                    <th scope="row">{{$i++}}</th>
                                    <td><a href="/peoples/{{$people->people_id}}">{{$people->people_name}}</a></td>
                                    <td>{{$people->service_name}}</td>
                                    <td>{{$people->payment_money}}</td>
                                    <td>{{$people->created_at}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$peoples->links()}}
                    </div>
                    @else
                    No payments yet!!!
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection