<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    @include('components.navigation.navbar')
   
    <main class="p-8">
        @yield('container')
    </main>
    <script src="{{ asset('js/corousel.js') }}"></script>
</body>
</html>