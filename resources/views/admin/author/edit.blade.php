@extends('admin.layout.master')
@section('title', 'Author')
@section('content')
    <x-edit title="Author" action="{{route('author.update', $record->id)}}" indexPageLink="{{route('author.index')}}">
        <x-input-text name="name" value="{{$record->name}}"></x-input-text>
        <x-input-text name="phone" value="{{$record->phone}}"></x-input-text>
        <x-input-text name="email" type="email" value="{{$record->email}}"></x-input-text>
        <x-input-file name="image" title="Image"></x-input-file>
        @if($record->image)<img src="{{attachmentPath($record->image)}}" alt="image" width="50px" height="50px">@endif
    </x-edit>
@endsection
