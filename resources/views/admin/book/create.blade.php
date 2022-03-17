@extends('admin.layout.master')
@section('title', 'Book')
@section('content')
    <x-create title="Book" action="{{route('book.store')}}" indexPageLink="{{route('book.index')}}">
        <div class="row">
            <div class="col-md-6">
                <x-input-text name="name"></x-input-text>
                <x-input-text name="url"></x-input-text>
                <x-input-select name="writer_id" :records="$writers"></x-input-select>
                <x-input-select name="editor_id" :placeholderSelected="false" :multiple="true" :records="$editors"></x-input-select>
                <x-input-select name="publisher_id" :records="$publishers"></x-input-select>
                <x-input-text name="published_at" type="date"></x-input-text>
            </div>
            <div class="col-md-6">
                <x-input-select name="status" :records="$constants::$statuses"></x-input-select>
                <x-input-select name="is_at_home" :records="$constants::$yesNo"></x-input-select>
                <x-input-file-without-script-section name="cover_image"></x-input-file-without-script-section>
                <x-input-file-without-script-section name="file"></x-input-file-without-script-section>
                <x-input-textarea name="description"></x-input-textarea>
            </div>
        </div>
    </x-create>
@endsection
@include('components.partials.input-file-script')
@push('bottomChildJs')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#editor_id').select2();

        });
    </script>
@endpush
