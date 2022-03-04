<div {{ $attributes->merge(['class' => 'form-group']) }}>
    <label>{{ $label }}</label>
    <textarea class="form-control"
        name="{{ $name }}" rows="{{$rows}}" cols="{{$cols}}"
        placeholder="{{ $placeholder }}" {{$required ? 'required' : ''}}>{{ $value }}</textarea>
</div>
