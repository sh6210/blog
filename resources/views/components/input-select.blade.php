<div {{ $attributes->merge(['class' => 'form-group']) }}>
    <label>{{$label}}</label>
    <div class="wrapper_{{$name}}">
        <select class="form-control @error($name) is-invalid @enderror" name="{{$name}}" id="{{$id}}" {{$required}} {{$multiple ? 'multiple' : ''}}>
            <option {{$placeholderSelected ? 'selected' : ''}} disabled>{{$placeholder}}</option>
            @foreach($records as $key => $record)
                @php($val = $record->id ?? $key)
                <option value="{{$val}}" {{ old($name) ? (old($name) == $val ? 'selected' : '') : ($isSelected($val) ? 'selected' : '')}}>
                    {{$record->name ?? $record}}
                </option>
            @endforeach
        </select>
    </div>
    @error($name)<span style="color: red">{{$message}}</span>@enderror
</div>
