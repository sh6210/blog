@extends('admin.layout.master')
@section('title', 'Comment')
@section('content')
    <x-edit title="Comment" action="{{route('comment.update', [$record->id])}}" indexPageLink="{{route('comment.index')}}">
        <div class="row">
            <div class="col-md-12">
                <x-input-textarea name="content" value="{{$record->content}}"></x-input-textarea>
                <x-input-text name="link" value="{{$record->link}}"></x-input-text>
                <x-input-select name="status" :records="$constants::$statuses" selected="{{$record->status}}"></x-input-select>
            </div>
        </div>
    </x-edit>
@endsection
