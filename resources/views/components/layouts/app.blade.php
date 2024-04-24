<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <title>{{ $title . ' | Galery by Zheka Baila Arkan' ?? ' | Galery by Zheka Baila Arkan' }}</title>
    </head>
    <body class="bg-cream">
    <x-layouts.navbar />
    <main class="px-40">
        {{ $slot }}
    </main>
    </body>
</html>
