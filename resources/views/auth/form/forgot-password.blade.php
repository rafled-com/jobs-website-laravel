<x-form method="POST" action="{{ route('password.email') }}">

@if (session('status'))
<div class="mb-4 font-medium text-sm text-green-600">
    {{ session('status') }}
</div>
@endif

<div class="block">
    <x-jet-label for="email" value="{{ __('Email') }}" />
    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
</div>

<div class="flex items-center justify-end mt-4">
    <x-jet-button>
        {{ __('Email Password Reset Link') }}
    </x-jet-button>
</div>

</x-form>
