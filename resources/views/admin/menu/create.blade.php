@extends('admin.layout.master')
@section('title', 'Menu')
@section('content')
    <x-create title="Menu" action="{{route('menu.store')}}" indexPageLink="{{route('menu.index')}}">
        <div class="row">
            <div class="col-md-6">
                <x-input-text name="title"></x-input-text>
                <x-input-text name="url"></x-input-text>
                <x-input-text name="play_list_link"></x-input-text>
                <x-input-text name="order" type="number"></x-input-text>
                <x-input-select name="parent_menu_id" :records="$menus" targetColumn="title"></x-input-select>
            </div>
            <div class="col-md-6">
                <x-input-file name="icon"></x-input-file>
                <x-input-select name="status" :records="$constants::$statuses"></x-input-select>
                <x-input-textarea name="description"></x-input-textarea>
            </div>
        </div>
    </x-create>
@endsection
