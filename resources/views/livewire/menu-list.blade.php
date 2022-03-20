<x-record-list title="Menu" :records="$records" newEntryLink="{{route('menu.create')}}">
    <table class="table">
        <thead>
        <tr>
            <th style="width: 10px">#</th>
            <th>icon</th>
            <th>Title</th>
            <th>Parent</th>
            <th>URL</th>
            <th>Order</th>
            <th>Status</th>
            <th>Published At</th>
            <th>Created At</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($records as $record)
            <tr>
                <td>{{ $records->firstItem() + $loop->index }}</td>
                <td><img src="{{attachmentPath($record->icon)}}" alt="Icon" height="50px" width="50px"></td>
                <td>{{$record->title}}</td>
                <td>{{optional($record->parent)->title}}</td>
                <td>{{$record->url}}</td>
                <td>{{$record->order}}</td>
                <td>{{$constants::$statuses[$record->status]}}</td>
                <td>{{\Carbon\Carbon::parse($record->published_at)->format('D M, Y')}}</td>
                <td>{{\Carbon\Carbon::parse($record->created_at)->format('D M, Y')}}</td>
                <td>
                    <a class="btn float-left" href="{{route('menu.edit', $record->id)}}"><i class="fas fa-edit fa-1x"></i> </a>
                    <form action="{{route('menu.destroy', $record->id)}}" method="post" class="float-left">
                        @csrf @method('delete')
                        <button class="btn" type="submit"><i class="fas fa-trash fa-1x"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</x-record-list>
