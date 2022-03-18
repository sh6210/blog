@extends('admin.layout.master')
@section('title', 'Donation')
@section('content')
    <h3>Donation</h3>
    <div class="invoice p-2 mb-3">
        <div class="row invoice-info">
            <div class="col-md-6 invoice-col">
                <address>
                    <strong>Status:</strong> {{$record->status ? $constants::$statuses[$record->status] : 'N/A'}}<br>
                    <strong>Accounts:</strong>
                    <br>
                    @foreach($record->accounts as $key => $val)
                        {{$key}}: {{$val}} <br>
                    @endforeach
                    <br>
                    <strong>Mobile Banking:</strong>
                    <br>
                    @foreach($record->mobile_banking as $key => $val)
                        {{$key}}: {{$val}} <br>
                    @endforeach
                    <br>
                </address>
            </div>
        </div>
    </div>
@endsection
