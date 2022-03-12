<x-record-list title="Books" newEntryLink="{{route('book.create')}}" :records="$records">
    <table class="table">
        <thead>
        <tr>
            <th style="width: 10px">#</th>
            <th>Cover Image</th>
            <th>Name</th>
            <th>URL</th>
            <th>Writer</th>
            <th>Editor</th>
            <th>At Home</th>
            <th>At Slider</th>
            <th>Published At</th>
        </tr>
        </thead>
        <tbody>
        @foreach($records as $record)
            <tr>
                <td>{{ $records->firstItem() + $loop->index }}</td>
                <td><img src="{{attachmentPath($record->cover_image)}}" alt="image" width="50px" height="50px"></td>
                <td>{{$record->name}}</td>
                <td>{{$record->url}}</td>
                <td>{{optional($record->writer)->name}}</td>
                <td>{{optional($record->editor)->name}}</td>
                <td>{{$record->is_at_home ? $constants::$yesNo[$record->is_at_home] : 'N/A'}}</td>
                <td>{{$record->is_at_slider ? $constants::$yesNo[$record->is_at_slider] : 'N/A'}}</td>
                <td>{{\Carbon\Carbon::parse($record->published_at)->format('D M, Y')}}</td>
                <td>
                    <a class="btn float-left" href="{{route('tag.edit', $record->id)}}"><i class="fas fa-edit fa-1x"></i> </a>
                    <form action="{{route('tag.destroy', $record->id)}}" method="post" class="float-left">
                        @csrf @method('delete')
                        <button class="btn" type="submit"><i class="fas fa-trash fa-1x"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</x-record-list>
