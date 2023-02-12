@if(isset($label))
    <x-label>
        {{ $label }}
        @if(isset($required))
            <b class="font-bold text-red-600">*</b>
        @endif
    </x-label>
@endif
<div {{ $attributes->merge(['class'=>'mb-4']) }} data-toast-editor></div>

