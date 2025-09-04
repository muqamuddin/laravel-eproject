<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />


    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body>
    <h1 class="text-4xl font-bold m-20 pt-40 text-teal-800">Hello, World!</h1>

    <livewire:example-component />
    @livewireScripts
</body>

</html>
