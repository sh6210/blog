<div class="form-group">
    <label for="exampleInputFile{{$title}}">{{$title}}</label>
    <div class="input-group" @error($name) is-invalid @enderror>
        <div class="custom-file">
            <input type="file" name="{{$name}}" class="custom-file-input" id="exampleInputFile{{$title}}">
            <label class="custom-file-label" for="exampleInputFile{{$title}}">Choose file</label>
        </div>
        <div class="input-group-append">
            <span class="input-group-text">Upload</span>
        </div>
    </div>
    @error($name)<span style="color: red">{{$message}}</span>@enderror
</div>
