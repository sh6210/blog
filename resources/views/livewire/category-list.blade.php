<x-record-list title="Categories" newEntryLink="{{route('category.create')}}" :records="$records">
    <table class="table">
        <thead>
        <tr>
            <th style="width: 10px">#</th>
            <th>Name</th>
            <th>Description</th>
            <th>Parent Category</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($records as $record)
            <tr>
                <td>{{ $records->firstItem() + $loop->index }}</td>
                <td>{{$record->name}}</td>
                <td>{{$record->description}}</td>
                <td>{{optional($record->parentCategory)->name}}</td>
                <td>
                    <a class="btn float-left" href="{{route('category.edit', $record->id)}}"><i class="fas fa-edit fa-1x"></i> </a>
                    <form action="{{route('category.destroy', $record->id)}}" method="post" class="float-left">
                        @csrf @method('delete')
                        <button class="btn" type="submit"><i class="fas fa-trash fa-1x"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</x-record-list>
