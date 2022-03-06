<div {{ $attributes->merge(['class' => 'form-group']) }}>
    @isset($label)<label for="{{$labelFor}}"> {{ $label }}</label>@endisset
    <input type="{{$type}}"
        name="{{ $name }}"
        class="form-control @error($name) is-invalid @enderror {{$inputClass}}"
        id="{{$inputId}}"
        value="{{ $value }}"
        placeholder="{{ $placeholder }}" {{$required}}>
    @error($name)<span style="color: red">{{$message}}</span>@enderror
</div>
