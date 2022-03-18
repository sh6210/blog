@extends('admin.layout.master')
@section('title', 'About')
@section('content')
    <h2>About</h2>
    <div class="invoice p-2 mb-3">
        <div class="row invoice-info">
            <div class="col-md-6 invoice-col">
                <address>
                    <strong>Status:</strong> {{$record->status ? $constants::$statuses[$record->status] : 'N/A'}}<br>
                    <strong>Name:</strong> {{$record->name}}<br>
                    <strong>Page Title:</strong> {{$record->page_title}}<br>
                    <strong>Summary:</strong> {{$record->summary}}<br>
                    <strong>Image:</strong> @if($record->image){{$record->image}}@endif<br>
                    <strong>Contact:</strong> {{$record->contact}}<br>
                </address>
            </div>
            <div class="col-md-6 invoice-col">
                <strong>Story Title:</strong> {{$record->story_title}}<br>
                <strong>Story Content:</strong> {{$record->story_content}}<br>
                <br><br>
                <strong>Education Title</strong> {{$record->education_title}}<br>
                <strong>Education Content</strong> {{$record->education_content}}<br>
                <br><br>
                <strong>Research Title</strong> {{$record->research_title}}<br>
                <strong>Research Content</strong> {{$record->research_content}}<br>
                <br><br>
                <strong>Experience Title</strong> {{$record->experience_title}}<br>
                <strong>Experience Content</strong> {{$record->experience_content}}<br>
            </div>
        </div>
    </div>
@endsection
