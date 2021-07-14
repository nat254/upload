<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agventure</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    @include('partials/_head')
    @include('partials/_css')
</head>
<body id="page-top">
    @include('partials/_nav')
    @include('partials/_header')
    <div>
        @yield('content')
    </div>

    @include('partials/_footer')
    @include('partials/_script')

    @yield('script')

</body>
</html>
