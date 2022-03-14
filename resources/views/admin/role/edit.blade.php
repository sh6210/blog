@extends('admin.layout.master')
@section('title', 'Role')
@section('content')
    <x-edit title="Role" action="{{route('role.update', [$record->id])}}" indexPageLink="{{route('role.index')}}">
        <div class="row">
            <div class="col-md-4">
                <x-input-text name="name" value="{{$record->name}}"></x-input-text>
                <x-input-text name="display_name" value="{{$record->display_name}}"></x-input-text>
                <x-input-textarea name="description" value="{{$record->description}}"></x-input-textarea>
            </div>
            <div class="col-md-2">
                <h5>Single Permissions</h5>
                <hr>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Subject</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($permissions['single'] as $permission)
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input type="checkbox" name="permissions[]" value="{{$permission->id}}"
                                           class="form-check-input" id="exampleCheck{{$permission->id}}" {{$selectedPermissions->contains($permission->id) ? 'checked' : ''}}>
                                    <label class="form-check-label"
                                           for="exampleCheck{{$permission->id}}">{{$permission->display_name}}</label>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-md-6">
                <h5>Module Permissions</h5>
                <hr>
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Module</th>
                        <th>Create</th>
                        <th>Read</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($permissions['crud'] as $key => $permission)
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input type="checkbox" class="parent-form-check-input">
                                </div>
                            </td>
                            <td>{{$key}}</td>
                            @foreach($permission as $each)
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" name="permissions[]" class="form-check-input"
                                               value="{{$each->id}}" {{$selectedPermissions->contains($each->id) ? 'checked' : ''}}>
                                    </div>
                                </td>
                            @endforeach
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </x-edit>
@endsection
@push('bottomChildJs')
    <script>
        let parent = document.querySelectorAll(".parent-form-check-input");

        for (let each of parent) {
            each.addEventListener('click', function (e){
                let trDom = e.currentTarget.parentNode.parentNode.parentNode;
                let targetDoms = trDom.querySelectorAll(".form-check-input");
                let checkboxStatusShouldBe = !!e.currentTarget.checked;
                for(each of targetDoms) {
                    each.checked = checkboxStatusShouldBe;
                }
            });
        }
    </script>
@endpush
