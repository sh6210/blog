<div class="card">
    <div class="card-header">
        <h3 class="card-title">{{$title}}</h3>
    </div>
    <div style="width: 100px; position: absolute; right: 10px; top: 10px">
        <a href="{{$newEntryLink}}" type="button"><i class="fa fa-plus" style="color: green; position: absolute; right: 20px"></i></a>
    </div>

    <!-- /.card-header -->
    <div class="card-body p-0">
        {{$slot}}

        {{ $records->links() }}
    </div>
    <!-- /.card-body -->
</div>
