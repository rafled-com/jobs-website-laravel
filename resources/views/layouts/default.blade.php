@php
$menu = [
        [
            'name'=>'jobs',
        ],
        [
            'name'=>'dashboard'
        ]
];
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('includes.header', ['menu'=>$menu])
    @yield('head')
</head>
<body>
    <div class="min-h-screen w-full container mx-auto pt-20 px-4 flex flex-col">
            @include('includes.navbar')
            @yield('body')
    </div>
    @include('includes.footer', ['menu'=>$menu])
</body>
</html>
