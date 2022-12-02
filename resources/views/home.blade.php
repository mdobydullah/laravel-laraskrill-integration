@extends('layout')

@section('title', 'LaraSkrill - Shouts.dev')

@section('content')
    <div class="text-center" style="margin-bottom: 25px;">
        <a href="{{url('make-payment')}}" class="btn btn-info">Make Payment</a>
        <a href="{{url('do-refund')}}" class="btn btn-danger">Do Refund</a>
    </div>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">MB Transaction ID</th>
            <th scope="col">Amount</th>
            <th scope="col">Customer Email</th>
            <th scope="col">Created At</th>
        </tr>
        </thead>
        <tbody>
        @if(!empty($payments))
            @foreach($payments as $payment)
                <tr>
                    <td>{{ $payment->id }}</td>
                    <td>{{ $payment->mb_transaction_id }}</td>
                    <td>{{ $payment->amount }} ({{ $payment->currency }})</td>
                    <td>{{ $payment->customer_email }}</td>
                    <td>{{ $payment->created_at->format('d M, Y - H:i A') }}</td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
@endsection
