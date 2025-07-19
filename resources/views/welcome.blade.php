<!DOCTYPE html>
<html>
<head>
    <title>Dahai PV</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-md text-center">
            <h1 class="text-2xl font-bold mb-4">¡Bienvenido a Dahai PV!</h1>
            <p class="mb-6">Sistema de gestión fotovoltaica</p>
            
            <div class="space-y-3">
                <a href="/login" class="block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                    Iniciar Sesión
                </a>
                <a href="/test-public" class="block bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
                    Probar Ruta Pública
                </a>
                @auth
                <a href="/dashboard" class="block bg-purple-500 text-white px-4 py-2 rounded hover:bg-purple-600">
                    Ir al Dashboard
                </a>
                @endauth
            </div>
        </div>
    </div>
</body>
</html>