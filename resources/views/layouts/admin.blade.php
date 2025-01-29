<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
    <script src="{{ asset('js/adminlte.min.js') }}" defer></script>
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        @include('layouts.navigation')
        <!-- Sidebar -->
        
        <!-- Contenido Principal -->
        <div class="content-wrapper">
        @yield('content')
        </div>
        <!-- Footer -->
    
    </div>
</body>
</html>