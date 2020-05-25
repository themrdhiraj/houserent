@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Paid rents <span class="badge badge-info">{{$payments[0]->people_name}}</span></div>
                <div class="card-body">
                    @if(count ($payments) > 0)
                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Service</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 1 @endphp
                                @foreach($payments as $payment)
                                <tr>
                                    <th scope="row">{{$i++}}</th>
                                    <td>{{$payment->service_name}}</td>
                                    <td>{{$payment->payment_money}}</td>
                                    <td>{{$payment->created_at}}</td>
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