<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        @vite(['resources/css/app.css', 'resources/sass/app.scss', 'resources/js/app.js'])
        <title>Punya Hasin</title>
    </head>

    <body>
        <x-navbar></x-navbar>
        <x-header>{{ $title }}</x-header>
        <main>
            <div class="container px-1 ">
                {{ $slot }}
            </div>
        </main>
    </body>

</html>
