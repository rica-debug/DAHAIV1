<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Dahai PV - Fabricante líder en energía solar y soluciones fotovoltaicas">
    <title>@yield('title', 'Dahai PV')</title>
    
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('uploads/image/20240117/65a73f44af937.svg') }}" type="image/svg+xml">
    
    <!-- CSS Principal -->
    @vite(['resources/css/app.css'])
    
    <!-- CSS de Librerías -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
    
    <!-- CSS Específico por página -->
    @stack('styles')
</head>
<body class="dahai-theme">
    <!-- Header Completo -->
    @include('partials.header')

    <!-- Contenido Principal -->
    <main>
        @yield('content')
    </main>

    <!-- Footer Completo -->
    @include('partials.footer')

    <!-- Scripts Base -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    @vite(['resources/js/app.js'])
    
    <!-- Inicialización de WOW.js con configuración -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new WOW({
                boxClass: 'wow',
                animateClass: 'animate__animated',
                offset: 100,
                mobile: true,
                live: true
            }).init();
        });
    </script>
    
    <!-- Scripts Específicos por página -->
    @stack('scripts')
</body>
</html>