<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Study Laravel - Code With Arvin
    </title>
    <link 
        rel="stylesheet" 
        href="style.css"
    />
    <link 
        href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;900&display=swap" 
        rel="stylesheet"
    />
    <link 
        rel="stylesheet" 
        href="//use.fontawesome.com/releases/v5.0.7/css/all.css"
    />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <header>
        @include('layouts.header')
    </header>

    @yield('content')
    
    <!-- Footer -->
    <footer>
        @include('layouts.footer')
    </footer>
</body>
</html>