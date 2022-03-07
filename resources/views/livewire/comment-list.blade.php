<x-record-list title="Comment" :records="$records">
    <table class="table">
        <thead>
        <tr>
            <th style="width: 10px">#</th>
            <th>Content</th>
            <th>Post</th>
            <th>Link</th>
            <th>Created At</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($records as $record)
            <tr>
                <td>{{ $records->firstItem() + $loop->index }}</td>
                <td>{{$record->content}}</td>
                <td>{{optional($record->post)->title}}</td>
                <td>{{$record->link}}</td>
                <td>{{\Carbon\Carbon::parse($record->created_at)->format('D M, Y')}}</td>
                <td>
                    <a class="btn float-left" href="{{route('comment.edit', $record->id)}}"><i class="fas fa-edit fa-1x"></i> </a>
                    <form action="{{route('comment.destroy', $record->id)}}" method="post" class="float-left">
                        @csrf @method('delete')
                        <button class="btn" type="submit"><i class="fas fa-trash fa-1x"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</x-record-list>
