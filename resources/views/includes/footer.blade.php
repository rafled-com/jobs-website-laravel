<footer class="border-t border-gray-200 bg-white rounded-lg shadow  dark:bg-gray-800 mt-4">
    <div class="container mx-auto inline-block md:flex md:items-center md:justify-between md:p-6 p-4">
        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© {{ now()->year }} <a href="{{ Config::get('app.url') }}" class="hover:underline">{{ Config::get('app.name') }}</a>. All Rights Reserved.
        </span>
        <ul class="flex flex-wrap items-center mt-3 text-sm text-gray-500 dark:text-gray-400 sm:mt-0">
            @foreach($menu as $key => $value)
                <li class="mr-4 md:mr-6 md:last:mr-0">
                    <a href="{{ route($value['name']) }}" class="hover:underline">{{ $value['name'] }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</footer>
