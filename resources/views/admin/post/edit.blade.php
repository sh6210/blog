@extends('admin.layout.master')
@section('title', 'Post')
@section('content')
    <x-edit title="Post" action="{{route('post.update', [$record->id])}}" indexPageLink="{{route('post.index')}}">
        <div class="row">
            <div class="col-md-6">
                <x-input-text name="title" value="{{$record->title}}"></x-input-text>
                <x-input-textarea name="content" value="{{$record->content}}"></x-input-textarea>
                <x-input-select name="category_id" :records="$categories" selected="{{optional($record->category)->id}}"></x-input-select>
                <x-input-select name="author_id" :records="$authors" value="{{optional($record->author)->id}}"></x-input-select>
                <x-input-file name="featured_image"></x-input-file>
                @if($record->featured_image)<img src="{{attachmentPath($record->featured_image)}}" alt="image" width="50px" height="50px">@endif
            </div>
            <div class="col-md-6">
                <x-input-select name="type" :records="$constants::$postTypes" selected="{{$record->type}}"></x-input-select>
                <x-input-select name="is_at_home" :records="$constants::$yesNo" selected="{{$record->is_at_home}}"></x-input-select>
                <x-input-select name="is_at_slider" :records="$constants::$yesNo" selected="{{$record->is_at_slider}}"></x-input-select>
                <x-input-select name="allow_comment" :records="$constants::$yesNo" selected="{{$record->allow_comment}}"></x-input-select>
                <x-input-select name="status" :records="$constants::$statuses" selected="{{$record->status}}"></x-input-select>
            </div>
        </div>
    </x-edit>
@endsection
