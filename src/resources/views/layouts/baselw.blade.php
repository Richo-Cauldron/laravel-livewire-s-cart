<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Shopping Basket with Laravel Livewire</title>
    <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet">
    @livewireStyles
</head>
<body class="bg-gray-200">
    <div id="app">
        <div class="px-3 py-2 bg-indigo-600">
            <div class="relative flex items-center max-w-3xl px-4 mx-auto">
                <div class="flex-auto">
                    <a href="/" class="text-lg text-white">Livewire shopping basket</a>
                </div>
                <div class="flex-shrink">
                    <livewire:basket-button>
                </div>
            </div>
        </div>
        <div class="max-w-3xl p-4 mx-auto">
            <livewire:basket />
            @yield('body')
        </div>
    </div>
    @livewireScripts    
</body>
</html>