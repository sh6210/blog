@extends('admin.layout.master')
@section('title', 'Footer')
@section('content')
    <h3>Footer</h3>
    <div class="invoice p-2 mb-3">
        <div class="row invoice-info">
            <div class="col-md-6 invoice-col">
                <address>
                    <strong>Status:</strong> {{$record->status ? $constants::$statuses[$record->status] : 'N/A'}}<br>
                    <strong>Logo:</strong> @if($record->logo)<img src="{{attachmentPath($record->logo)}}" alt="Logo" width="50px" height="50px">@endif<br>
                    <strong>Content:</strong> {{$record->content}}<br>
                    <strong>Copyright:</strong> {{$record->copyright}}<br>
                </address>
            </div>
        </div>
    </div>
@endsection
