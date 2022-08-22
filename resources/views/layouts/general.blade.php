<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @livewireStyles
    @vite('resources/css/app.css')
</head>
<body x-data class="min-h-screen">
    <div class="grid grid-cols-1 divide-y divide-gray-100">
        <livewire:components.navigation-bar />
        @yield('navbar-attached')
    </div>

    @yield('content')

    @livewireScripts
    <wireui:scripts />
    @vite('resources/js/app.js')
</body>
</html>
