<div class="fixed w-screen h-screen flex-col flex dark:bg-gray-900/70 bg-white/70 top-0 left-0 justify-center items-center backdrop-blur-sm invisible opacity-0 transition-all duration-200" id="auth-form-popup-modal">
    <div class="w-96 p-4 border rounded-lg border-gray-200 dark:bg-gray-900 bg-white">
        <div class="mb-2 flex justify-between">
            <x-h3 class="w-fit">Sign In</x-h3>

            <button type="button" onclick="toggleLoginPopup()">
                <x-css-close class="w-7 h-7"/>
            </button>
        </div>
        @include('auth.form.login')
    </div>
</div>
