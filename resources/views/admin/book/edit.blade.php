@extends('admin.layout.master')
@section('title', 'Book')
@section('content')
    <x-edit title="Book" action="{{route('book.update', $record->id)}}" indexPageLink="{{route('book.index')}}">
        <div class="row">
            <div class="col-md-6">
                <x-input-text name="name" value="{{$record->name}}"></x-input-text>
                <x-input-text name="url" value="{{$record->url}}"></x-input-text>
                <x-input-select name="editor_id" :placeholderSelected="false" :selected="$record->editors->pluck('id')" :multiple="true" :records="$editors"></x-input-select>
                <x-input-select name="writer_id" :records="$writers" selected="{{optional($record->writer)->id}}"></x-input-select>
                <x-input-select name="publisher_id" :records="$publishers" selected="{{optional($record->publisher)->id}}"></x-input-select>
                <x-input-text name="published_at" type="date" value="{{$record->published_at}}"></x-input-text>
            </div>
            <div class="col-md-6">
                <x-input-select name="status" :records="$constants::$statuses" selected="{{$record->status}}"></x-input-select>
                <x-input-select name="is_at_home" :records="$constants::$yesNo" selected="{{$record->is_at_home}}"></x-input-select>
                <div class="row">
                    <div class="col-md-10"><x-input-file-without-script-section name="cover_image"></x-input-file-without-script-section></div>
                    <div class="col-md-2">
                        @if($record->cover_image)<img src="{{attachmentPath($record->cover_image)}}" alt="Cover Image" height="70px" width="70px">@endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10"><x-input-file-without-script-section name="file"></x-input-file-without-script-section></div>
                    <div class="col-md-2">
                        @if($record->file)<a href="{{route('download.attachment', ['path' => $record->file])}}"><span class="fa fa-file-pdf fa-4x"></span></a>@endif
                    </div>
                </div>
                <x-input-textarea name="description" value="{{$record->description}}"></x-input-textarea>
            </div>
        </div>
    </x-edit>
@endsection
@push('bottomChildJs')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#editor_id').select2();
        });
    </script>
@endpush
