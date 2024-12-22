<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Skaju | {{ $title }}</title>

    @include('partials.fonts')
    @vite("resources/css/app.css")
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <link rel="stylesheet" href="style.css">
</head>

<body>
    @include('partials.header')

    <div class="main-container">
        @yield('content')
    </div>

</body>

</html>
