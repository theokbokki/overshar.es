<!DOCTYPE html>
<html
    lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    style="{{ isset($post) ? '--bg: '.$post->color : '' }}"
>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ config('app.name') }}</title>

        @vite(['resources/css/app.scss', 'resources/js/app.js'])

        @livewireStyles
    </head>
    <body>
        <h1 class="sro">{{ config('app.name') }}</h1>
        <livewire:nav></livewire:nav>
        {{ $slot }}

        @livewireScripts
    </body>
</html>
