<!DOCTYPE html>
<html lang="en">
<html class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="HRZ Indonesia provides IT solutions, including software development, cloud services, and automation. Your trusted technology partner.">
    <title>{{ env('APP_NAME') }} | {{ $title ?? '' }}</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
</head>
<body>
    {{ $slot }}
</body>
</html>
