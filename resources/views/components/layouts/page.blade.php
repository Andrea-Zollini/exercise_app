@props(['title' => config('app.name')])


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-slate-900">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <livewire:styles>
        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body class="h-full font-sans antialiased text-slate-50">
        {{ $slot }}
        <livewire:scripts>
    </body>
</html>
