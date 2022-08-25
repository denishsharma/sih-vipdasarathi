<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vipdasarathi</title>

    @livewireStyles
    @vite('resources/css/app.css')
</head>

<body x-data class="min-h-screen">
    @yield('body-content')

    @livewireScripts
    <wireui:scripts />
    @vite('resources/js/app.js')
    @livewire('livewire-ui-modal')
</body>

</html>
