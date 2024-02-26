<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >
    <title>Hghroid.com, Buy online anabolic steroid Us domestic</title>
    <meta
        name="description"
            content="Hghroid is one such website, and we guarantee you to provide the best quality and variety of anabolic steroids across the USA."
    >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link
        href="{{ asset('css/app.css') }}"
        rel="stylesheet"
    >
    <link
        href="{{ asset('css/w.css') }}"
        rel="stylesheet"
    >

    <script
        defer
        src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
    <link
        rel="icon"
        href="{{ asset('favicon.svg') }}"
    >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: "Roboto Condensed", sans-serif;
            font-optical-sizing: auto;
            font-style: normal;
        }
        .product-brand {
            position: absolute;
            top: 10px;
            right: 10px;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: #FFF;
            padding: 5px;
            z-index: 999;
        }
    </style>

    @livewireStyles
</head>

<body class="antialiased text-gray-900">
@livewire('components.navigation')

<main>
    {{ $slot }}
</main>

<x-footer/>

@livewireScripts
</body>

</html>
