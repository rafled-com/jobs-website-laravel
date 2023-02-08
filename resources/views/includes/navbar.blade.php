<nav class="bg-white px-2 sm:px-4 py-2.5 dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600 md:h-[4.5rem] h-16">
    <div class="container flex flex-wrap items-center justify-between mx-auto">
        <a href="{{ Config::get('app.url') }}" class="flex items-center">
            @if (Config::get('app.logo') ?? false)
                <img src="{{ Config::get('app.logo') }}" class="h-6 mr-3 sm:h-9" alt="{{ Config::get('app.name') }} Logo">
            @endif
            <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">{{ Config::get('app.name') }}</span>
        </a>
        <div class="flex md:order-2 space-x-4">
            @if (is_null(Auth::user()))
                <button type="button" class="" onclick="toggleLoginPopup()">
                    <x-bx-user class="w-7 h-7" />
                </button>
            @endif

            @if(Route::currentRouteName() != 'hire')
                <button type="button" class="text-white bg-light_primary hover:bg-light_hover focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-dark_primary dark:hover:bg-dark_hover dark:focus:ring-blue-800">
                    Post Jobs
                </button>
            @endif
            <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
        </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                @foreach($menu as $key => $value)
                    <li>
                        <a href="{{ route($value['name']) }}" class="hover:underline block py-2 pl-3 pr-4 rounded md:bg-transparent capitalize {{ Route::currentRouteName() == $value['name'] ? 'text-blue-700' : 'text-gray-700' }} md:p-0 ">{{ $value['name'] }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>
@if (is_null(Auth::user()))
    @include('includes.popup-modal')
@endif
