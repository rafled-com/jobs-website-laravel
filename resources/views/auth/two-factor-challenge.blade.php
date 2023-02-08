@extends('layouts.default')

@section('head')
    <title>Two Factor</title>
@endsection

@section('body')
    <div class="max-w-sm w-full m-auto h-full p-4 border rounded-lg border-gray-200">
        @include('auth.form.two-factor-challenge')
    </div>
@endsection
