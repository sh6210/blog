@extends('admin.layout.master')
@section('title', 'Category')
@section('content')
    <x-edit title="Category" action="{{route('category.update', $record->id)}}" indexPageLink="{{route('category.index')}}">
        <x-input-text name="name" value="{{$record->name}}"></x-input-text>
        <x-input-textarea name="description" value="{{$record->description}}"></x-input-textarea>
        <x-input-select name="parent_category_id" :records="$categories" selected="{{optional($record->parentCategory)->id}}"></x-input-select>
        <x-input-select name="status" :records="$constants::$statuses" selected="{{$record->status}}"></x-input-select>
    </x-edit>
@endsection
