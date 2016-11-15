@extends('main')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Shipping Details</div>
                <div class="panel-body">
                    @if ($shipping)
                    <h4>Delivery date: {{ $shipping->delivery_date }}</h4>
                    @else
                    <h4>Shipping not found!</h4>
                    @endif
                    <a class="btn btn-primary" href="{{ url('/') }}">&laquo; Go back!</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
