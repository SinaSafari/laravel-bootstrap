<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{--  loading js  --}}
    <script defer src="{{ asset('js/app.js') }}"></script>
    {{--  loading css  --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
@include('_partials.navbar')
<div class="container">
    @yield('content')
</div>

</body>
</html>
