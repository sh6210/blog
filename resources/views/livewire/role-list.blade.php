<x-record-list title="Role" newEntryLink="{{route('role.create')}}" :records="$records">
    <table class="table">
        <thead>
        <tr>
            <th style="width: 10px">#</th>
            <th>Name</th>
            <th>Display Name</th>
            <th>Description</th>
            <th>Created At</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($records as $record)
            <tr>
                <td>{{ $records->firstItem() + $loop->index }}</td>
                <td>{{$record->name}}</td>
                <td>{{$record->display_name}}</td>
                <td>{{$record->description}}</td>
                <td>{{\Carbon\Carbon::parse($record->created_at)->diffForHumans()}}</td>
                <td>
                    <a class="btn float-left" href="{{route('role.edit', $record->id)}}"><i class="fas fa-edit fa-1x"></i> </a>
                    <form action="{{route('role.destroy', $record->id)}}" method="post" class="float-left">
                        @csrf @method('delete')
                        <button class="btn" type="submit"><i class="fas fa-trash fa-1x"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</x-record-list>
