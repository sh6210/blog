@extends('admin.layout.master')
@section('title', 'Category')
@section('content')
    <x-create title="Category" action="{{route('category.store')}}" indexPageLink="{{route('category.index')}}">
        <x-input-text name="name"></x-input-text>
        <x-input-textarea name="description"></x-input-textarea>
        <x-input-select name="parent_category_id" :records="$categories"></x-input-select>
        <x-input-select name="status" :records="$constants::$statuses"></x-input-select>
    </x-create>
@endsection
