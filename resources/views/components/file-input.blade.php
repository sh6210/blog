<div class="form-group">
    <label for="exampleInputFile">{{$title}}</label>
    <div class="input-group">
        <div class="custom-file">
            <input type="file" name="{{$name}}" class="custom-file-input" id="exampleInputFile{{$title}}">
            <label class="custom-file-label" for="exampleInputFile{{$title}}">Choose file</label>
        </div>
        <div class="input-group-append">
            <span class="input-group-text">Upload</span>
        </div>
    </div>
</div>
@push('bottomChildJs')
    <script src="{{asset('admin-panel/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
    <script>
        $(function () {
            bsCustomFileInput.init();
        });
    </script>
@endpush
