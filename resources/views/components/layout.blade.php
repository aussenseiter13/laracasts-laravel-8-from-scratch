<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Blog</title>
</head>

<body>
    <header>
        <!-- BASIC BLADE TEMPLATES -->
        <!-- @yield('banner') -->

        <!-- BLADE COMPONENT SYNTAX -->
    </header>
    <main>
        <!-- BASIC BLADE TEMPLATES -->
        <!-- @yield('content') -->

        <!-- BLADE COMPONENT SYNTAX -->
        {{ $slot }}
    </main>
</body>

</html>