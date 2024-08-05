<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ isset($title) ? $title . ' | ' : '' }} موش کور</title>
</head>
<body>
    <section class="p-8">
        @isset($header)
            <div>
                <x-header separator progress-indicator>
                    <x-slot:title>{{ $header }}</x-slot:title>
                </x-header>
            </div>
        @endisset

        {{ $slot }}
    </section>
</body>
</html>
