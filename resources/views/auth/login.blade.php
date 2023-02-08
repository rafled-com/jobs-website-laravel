@extends('layouts.default')

@section('head')
    <title>Login - {{ Config::get('app.name') }}</title>
@endsection

@section('body')
    <div class="max-w-sm w-full m-auto h-full p-4 border rounded-lg border-gray-200">
        @include('auth.form.login')
    </div>
@endsection
