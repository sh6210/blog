@extends('admin.layout.master')
@section('title', 'Tag')
@section('content')
    <x-create title="Tag" action="{{route('tag.store')}}" indexPageLink="{{route('tag.index')}}">
        <div class="row">
            <div class="col-md-12">
                <x-input-text name="name"></x-input-text>
                <x-input-textarea name="description"></x-input-textarea>
                <x-input-select name="status" :records="$constants::$statuses"></x-input-select>
            </div>
        </div>
    </x-create>
@endsection
