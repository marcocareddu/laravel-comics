<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Import Assets --}}
    @vite('resources/scss/app.scss')
    <title>Home</title>
</head>

<body>

    {{-- Import header --}}
    @include('includes.header')


    {{-- !TODO Main HERE --}}

    {{-- Import footer --}}
    @include('includes.footer')

</body>

</html>
