@extends('admin.layout.master')
@section('title', 'Author')
@section('content')
    <x-create title="Author" action="{{route('author.store')}}" indexPageLink="{{route('author.index')}}">
        <x-input-text name="name"></x-input-text>
        <x-input-text name="phone"></x-input-text>
        <x-input-text name="email" type="email"></x-input-text>
        <x-input-file name="image" title="Image"></x-input-file>
    </x-create>
@endsection
