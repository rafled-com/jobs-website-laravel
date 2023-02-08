<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
@vite([
    'resources/css/app.css',
    'resources/js/app.js'
])

@php
    $scripts = [
        'login-modal-popup'
    ];
@endphp

@foreach($scripts as $key => $value)
    @include('includes.scripts.'.$value)
@endforeach
