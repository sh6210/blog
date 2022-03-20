<x-record-list title="User" :records="$records" newEntryLink="{{route('user.create')}}">
    <table class="table">
        <thead>
        <tr>
            <th style="width: 10px">#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Status</th>
            <th>Created At</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($records as $record)
            <tr>
                <td>{{ $records->firstItem() + $loop->index }}</td>
                <td>{{$record->name}}</td>
                <td>{{$record->email}}</td>
                <td>{{$record->roles->count() ? $record->roles->pluck('display_name')->join(', ') : 'N/A'}}</td>
                <td>{{$record->deleted_at ? $constants::STATUS_INACTIVE : $constants::STATUS_ACTIVE}}</td>
                <td>{{\Carbon\Carbon::parse($record->created_at)->format('D M, Y')}}</td>
                <td>
                    <a class="btn float-left" href="{{route('user.edit', $record->id)}}"><i class="fas fa-edit fa-1x"></i></a>
                    {{--<form action="{{route('user.destroy', $record->id)}}" method="post" class="float-left">
                        @csrf @method('delete')
                        <button class="btn" type="submit"><i class="fas fa-trash fa-1x"></i></button>
                    </form>--}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</x-record-list>
