@extends('admin.layout.master')
@section('title', 'User')
@section('content')
    <x-edit title="User" action="{{route('menu.update', $record->id)}}" indexPageLink="{{route('menu.index')}}">
        <div class="row">
            <div class="col-md-6">
                <x-input-text name="title" value="{{$record->title}}"></x-input-text>
                <x-input-text name="url" value="{{$record->url}}"></x-input-text>
                <x-input-text name="play_list_link" value="{{$record->play_list_link}}"></x-input-text>
                <x-input-text name="order" type="number" value="{{$record->order}}"></x-input-text>
                <x-input-select name="parent_menu_id" :records="$menus" targetColumn="title" selected="{{optional($record->parent)->id}}"></x-input-select>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-10"><x-input-file name="icon"></x-input-file></div>
                    <div class="col-md-2">
                        @if($record->icon)<img src="{{attachmentPath($record->icon)}}" alt="Cover Image" height="70px" width="70px">@endif
                    </div>
                </div>
                <x-input-select name="status" :records="$constants::$statuses" selected="{{$record->deleted_at ? $constants::STATUS_INACTIVE : $constants::STATUS_ACTIVE}}"></x-input-select>
                <x-input-textarea name="description" value="{{$record->description}}"></x-input-textarea>
            </div>
        </div>
    </x-edit>
@endsection
