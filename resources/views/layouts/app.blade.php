<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TALL News</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @livewireStyles
</head>
<body class="bg-container">
    @livewire('partials.header')

    <div class="container mx-auto max-w-lg lg:max-w-5xl xl:max-w-7xl py-12 px-8">
        @livewire('index')
    </div>

    @livewireScripts
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>
