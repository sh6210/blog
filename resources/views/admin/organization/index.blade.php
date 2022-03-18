@extends('admin.layout.master')
@section('title', 'Organization')
@section('content')
    <h2>Organization</h2>
    <div class="invoice p-3 mb-3">
        <div class="row">
            <div class="col-12">
                <h4>
                    <i class="fas fa-globe"></i> {{$record->name}}
                    <small class="float-right">
                        <storng>Created At:</storng> {{\Illuminate\Support\Carbon::parse($record->created_at)->diffForHumans()}}
{{--                        <a class="btn" href="{{route('organization.edit', $record->id)}}"><i class="fas fa-edit fa-1x"></i> </a>--}}
                    </small>
                </h4>
            </div>
        </div>
        <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
                <address>
                    <strong>Status:</strong> {{$record->status ? $constants::$statuses[$record->status] : 'N/A'}}<br>
                    <strong>Is At Home:</strong> {{$record->is_at_home ? $constants::$yesNo[$record->is_at_home] : 'N/A'}}<br>
                    <strong>Logo:</strong> @if($record->logo)<img src="{{attachmentPath($record->logo)}}" alt="Logo">@endif<br>
                </address>
            </div>
            <div class="col-sm-4 invoice-col">
                <address>
                    <strong>Email:</strong> {{$record->email}}<br>
                    <strong>Website:</strong> {{$record->website}}<br>
                    <strong>Social:</strong> <br>
                    @foreach($record->social as $key => $val) {{$key}}: {{$val}} <br> @endforeach
                </address>
            </div>
            <div class="col-sm-4 invoice-col">
                <strong>Excerpt:</strong> {{$record->excerpt}}<br>
                <strong>Description:</strong> {{$record->description}}<br>
            </div>
        </div>
    </div>
@endsection
