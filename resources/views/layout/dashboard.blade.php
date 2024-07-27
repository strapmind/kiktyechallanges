<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BrainsterLabs 2.0</title>

    <!-- STYLE -->
    @include('layout.styles')

</head>

<body>
    @include('layout.nav')



    @yield('content')


    @include('layout.footer')

    @include('layout.scripts')
</body>

</html>