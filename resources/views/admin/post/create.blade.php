@extends('admin.layout.master')
@section('title', 'Post')
@section('content')
    <x-create title="Post" action="{{route('post.store')}}" indexPageLink="{{route('post.index')}}">
        <div class="row">
            <div class="col-md-6">
                <x-input-text name="title"></x-input-text>
                <x-input-textarea name="content"></x-input-textarea>
                <x-input-select name="category_id" :records="$categories"></x-input-select>
                <x-input-select name="author_id" :records="$authors"></x-input-select>
                <x-input-file name="featured_image"></x-input-file>
            </div>
            <div class="col-md-6">
                <x-input-select name="type" :records="$constants::$postTypes"></x-input-select>
                <x-input-select name="is_at_home" :records="$constants::$yesNo"></x-input-select>
                <x-input-select name="is_at_slider" :records="$constants::$yesNo"></x-input-select>
                <x-input-select name="allow_comment" :records="$constants::$yesNo"></x-input-select>
                <x-input-select name="status" :records="$constants::$statuses"></x-input-select>
            </div>
        </div>
    </x-create>
@endsection
