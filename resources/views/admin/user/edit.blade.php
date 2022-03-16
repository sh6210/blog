@extends('admin.layout.master')
@section('title', 'User')
@section('content')
{{--    @dd($record)--}}
    <x-edit title="User" action="{{route('user.update', $record->id)}}" indexPageLink="{{route('user.index')}}">
        <x-input-text name="name" value="{{$record->name}}"></x-input-text>
        <x-input-text name="email" type="email" value="{{$record->email}}"></x-input-text>
        <x-input-text name="password" type="password"></x-input-text>
        <x-input-text name="password_confirmation" type="password"></x-input-text>
        <x-input-select name="role" :records="$roles" selected="{{$record->roles[0]->id}}"></x-input-select>
        <x-input-select name="status" :records="$constants::$statuses" selected="{{$record->deleted_at ? $constants::STATUS_INACTIVE : $constants::STATUS_ACTIVE}}"></x-input-select>
    </x-edit>
@endsection
