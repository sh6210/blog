@extends('admin.layout.master')
@section('title', 'Contact')
@section('content')
    <h3>Contact</h3>
    <div class="invoice p-2 mb-3">
        <div class="row invoice-info">
            <div class="col-md-6 invoice-col">
                <address>
                    <strong>Status:</strong> {{$record->status ? $constants::$statuses[$record->status] : 'N/A'}}<br>
                    <strong>Page Title:</strong> {{$record->page_title}}<br>
                    <strong>Phone:</strong> {{$record->phone}}<br>
                    <strong>Email:</strong> {{$record->email}}<br>
                    <strong>Address:</strong> {{$record->address}}<br>
                    <strong>Description:</strong> {{$record->description}}<br>
                </address>
            </div>
        </div>
    </div>
@endsection
