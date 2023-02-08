@extends('layouts.default')

@section('head')
    <title>Verify Email</title>
@endsection

@section('body')
    <div class="max-w-sm w-full m-auto h-full p-4 border rounded-lg border-gray-200">
        @include('auth.form.verify-email')
    </div>
@endsection
