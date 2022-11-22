<!DOCTYPE html>
<html lang="en">

    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BPSK | @yield('title')</title>

    @include('includes.style')

    @stack('add-style')

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
    <header>
        @include('includes.navbar')
    </header>

    @yield('content')

    @include('includes.footer')


    @include('includes.script')

    @stack('add-script')

</body>

</html>
