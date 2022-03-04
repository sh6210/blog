<div {{ $attributes->merge(['class' => 'form-group']) }}>
    <label>{{$label}}</label>
    <div class="wrapper_{{$name}}">
        <select class="form-control @error($name) has-error @enderror" name="{{$name}}" id="{{$name}}" {{$required}}>
            <option selected disabled>{{$placeholder}}</option>
            @foreach($records as $key => $record)
                @php($val = $record->id ?? $key)
                <option value="{{$val}}" {{ old($name) ? (old($name) == $val ? 'selected' : '') : ($isSelected($val) ? 'selected' : '')}}>{{$record->name ?? $record}}</option>
            @endforeach
        </select>
        @error($name)<span style="color: red">{{$message}}</span>@enderror
    </div>
</div>
