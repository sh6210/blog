<x-record-list title="Posts" newEntryLink="{{route('post.create')}}" :records="$records">
    <table class="table">
        <thead>
        <tr>
            <th style="width: 10px">#</th>
            <th>Featured Image</th>
            <th>Title</th>
            <th>At Home</th>
            <th>At Slider</th>
            <th>Content</th>
            <th>Author</th>
            <th>Comment Allowed</th>
            <th>Category</th>
            <th>Publish At</th>
        </tr>
        </thead>
        <tbody>
        @foreach($records as $record)
            <tr>
                <td>{{ $records->firstItem() + $loop->index }}</td>
                <td><img src="{{attachmentPath($record->featured_image)}}" alt="image" width="50px" height="50px"></td>
                <td>{{$record->title}}</td>
                <td>{{$constants::$yesNo[$record->is_at_home]}}</td>
                <td>{{$constants::$yesNo[$record->is_at_slider]}}</td>
                <td title="{{$record->content}}">{{$record->excerpt}}</td>
                <td>{{optional($record->author)->name}}</td>
                <td>{{$constants::$yesNo[$record->allow_comment]}}</td>
                <td>{{optional($record->category)->name}}</td>
                <td>{{\Carbon\Carbon::parse($record->published_at)->diffForHumans()}}</td>
                <td>
                    <a class="btn float-left" href="{{route('post.edit', $record->id)}}"><i class="fas fa-edit fa-1x"></i> </a>
                    <form action="{{route('post.destroy', $record->id)}}" method="post" class="float-left">
                        @csrf @method('delete')
                        <button class="btn" type="submit"><i class="fas fa-trash fa-1x"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</x-record-list>
