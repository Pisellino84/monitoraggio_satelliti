<!DOCTYPE html>
<html lang="it" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Monitoraggio Satelliti' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .aspect-poster {
            aspect-ratio: 2 / 3;
        }
    </style>
</head>

<body class="font-sans antialiased min-h-screen bg-deepblack bg-grid-pattern overflow-x-hidden selection:bg-accentcyan selection:text-deepblack">

    {{ $slot }}
</body>

</html>
