@extends('main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    {!! Form::open((['route' => 'front.show'])) !!}
                        {!! Form::label('tracking_code', 'Shipping Tracking Code:') !!}
                        {!! Form::text('tracking_code', null, array('class' => 'form-control')) !!}
                        {!! Form::submit('Show delivery date', array('class'=> 'btn btn-lg btn-success btn-block', 'style' => 'margin-top: 20px;')) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
