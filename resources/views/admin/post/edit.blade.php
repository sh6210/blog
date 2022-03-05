@extends('admin.layout.master')
@section('title', 'Post')
@section('content')
    <x-edit title="Post" action="{{route('post.update', $record->id)}}" indexPageLink="{{route('post.index')}}">

        <x-input-select name="type"></x-input-select>
        <x-input-select name="status" :records="$contents::$statuses"></x-input-select>
        @if($record->image)<img src="{{attachmentPath($record->image)}}" alt="image" width="50px" height="50px">@endif
    </x-edit>
@endsection
