<x-record-list title="Authors" newEntryLink="{{route('author.create')}}" :records="$records">
    <table class="table">
        <thead>
        <tr>
            <th style="width: 10px">#</th>
            <th>Image</th>
            <th>Name</th>
            <th>email</th>
            <th>phone</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($records as $record)
            <tr>
                <td>{{ $records->firstItem() + $loop->index }}</td>
                <td><img src="{{attachmentPath($record->image)}}" alt="image" width="50px" height="50px"></td>
                <td>{{$record->name}}</td>
                <td>{{$record->email}}</td>
                <td>{{$record->phone}}</td>
                <td>
                    <a class="btn float-left" href="{{route('author.edit', $record->id)}}"><i class="fas fa-edit fa-1x"></i> </a>
                    <form action="{{route('author.destroy', $record->id)}}" method="post" class="float-left">
                        @csrf @method('delete')
                        <button class="btn" type="submit"><i class="fas fa-trash fa-1x"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</x-record-list>
