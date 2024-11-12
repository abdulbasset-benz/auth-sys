<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel App</title>
    @vite('resources/css/app.css')
</head>

<body>
    <header>
        <x-forms.navigation />
    </header>

    <main>
        {{ $slot }}
    </main>

    <footer>
    </footer>


</body>

</html>
