@if(isset($label))
    <x-label>
        {{ $label }}
        @if(isset($required))
            <b class="font-bold text-red-600">*</b>
        @endif
    </x-label>
@endif
<input {{ $attributes->merge(['class'=>"p-3 rounded-lg border border-gray-200 mb-3"]) }} />
