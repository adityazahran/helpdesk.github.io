<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/app.css" rel="stylesheet">
    <title>{{ $title }} - Helpdesk PT Tirta Asasta</title>
</head>
<body>
    <x-navbar></x-navbar>
    {{ $slot }}
    <h1 class="font-bold"></h1>
</body>
</html>