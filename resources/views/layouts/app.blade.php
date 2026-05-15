<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? config('app.name') }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles
    </head>
    <body>
        <header>
            <a href="{{ route('index') }}" wire:navigate>Index</a>
            <a href="{{ route('about') }}" wire:navigate>About</a>
        </header>

        {{ $slot }}

        @livewireScripts
    </body>
</html>
