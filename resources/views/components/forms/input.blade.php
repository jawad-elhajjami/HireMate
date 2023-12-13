@props(['inputType', 'inputName'])

@php
    $errorClass = $errors->has($attributes['wire:model']) ? 'error' : '';
@endphp
<label class="custom-field one mb-3 {{ $errorClass }}">
    <input type="{{ $inputType }}" placeholder=" " autocomplete="false" wire:model="{{ $attributes['wire:model'] }}"/>
    <span class="placeholder">{{$inputName}}</span>
</label>