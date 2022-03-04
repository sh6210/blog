<div class="card">
    <div class="card-header">
        <h3 class="card-title">{{$title}}</h3>
    </div>
    <div style="width: 100px; position: absolute; right: 10px; top: 10px">
        <a href="{{$newEntryLink}}" type="button" class="btn btn-block bg-gradient-primary btn-lg">Add</a>
    </div>

    <!-- /.card-header -->
    <div class="card-body p-0">
        {{$slot}}

        {{ $records->links() }}
    </div>
    <!-- /.card-body -->
</div>
