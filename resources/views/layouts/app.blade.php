<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
    <div class="main">
        <h1 class="text-center text-white text-uppercase"> busiess casual</h1>
        
        <nav class="brown">
            <a href="/" @if(request()->routeIs('home')) class="active" @endif>Home</a>
            
            @if(session('user_data'))  
                <a href="/logout" @if(request()->routeIs('logout')) class="active" @endif>Logout</a>
            @else
                <a href="/login" @if(request()->routeIs('login')) class="active" @endif>Login</a>
            @endif
        </nav>
        
        @yield('container')

        
        <footer class="fixed-bottom brown" >
            <p class="text-center text-white mb-0 py-3">Copyright &copy; Your Website 2018</p>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
