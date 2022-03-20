@extends('admin.layout.master')
@section('title', 'User')
@section('content')
    <x-create title="User" action="{{route('user.store')}}" indexPageLink="{{route('user.index')}}">
        <x-input-text name="name"></x-input-text>
        <x-input-text name="email" type="email"></x-input-text>
        <x-input-text name="password" type="password"></x-input-text>
        <x-input-text name="password_confirmation" type="password"></x-input-text>
        <x-input-select name="role" :records="$roles"></x-input-select>
        <x-input-select name="status" :records="$constants::$statuses"></x-input-select>
    </x-create>
@endsection
