@extends('admin.layout.master')
@section('title', 'Tag')
@section('content')
    <x-edit title="Tag" action="{{route('tag.update', [$record->id])}}" indexPageLink="{{route('tag.index')}}">
        <div class="row">
            <div class="col-md-12">
                <x-input-text name="name" value="{{$record->name}}"></x-input-text>
                <x-input-textarea name="description" value="{{$record->description}}"></x-input-textarea>
                <x-input-select name="status" :records="$constants::$statuses" selected="{{$record->status}}"></x-input-select>
            </div>
        </div>
    </x-edit>
@endsection
