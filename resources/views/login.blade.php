<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión - Administrador UCSC</title>
    <!-- Tailwind CSS CDN para estilos rápidos -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 h-screen flex items-center justify-center">

    <div class="bg-white w-full max-w-md mx-4 p-8 rounded-2xl shadow-xl border border-slate-200 relative">
        
        <!-- Logo y Encabezado institucional -->
        <div class="text-center mb-6">
            <div class="inline-flex items-center justify-center mb-2">
                <!-- Simulación del logo UCSC -->
                <span class="text-red-700 font-bold text-2xl tracking-tight">UCSC</span>
            </div>
            <p class="text-xs text-slate-500 font-medium">Universidad Católica de la Santísima Concepción</p>
            <h2 class="text-xl font-bold text-slate-800 mt-3">Inicio de Sesión </h2>
        </div>

        <!-- Mensajes de Error globales -->
        @if ($errors->any())
            <div class="mb-4 p-3 bg-red-50 border border-red-200 text-red-700 text-sm rounded-lg">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Formulario de Login -->
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Campo Usuario / Correo institucional -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-semibold text-slate-700 mb-1">Usuario</label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-slate-400">
                        ✉
                    </span>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus
                        class="w-full pl-10 pr-4 py-2.5 bg-slate-50 border border-slate-300 rounded-lg text-slate-800 text-sm focus:outline-none focus:ring-2 focus:ring-blue-600 focus:bg-white transition"
                        placeholder="ingrese su usuario">
                </div>
            </div>

            <!-- Campo Contraseña -->
            <div class="mb-4">
                <label for="password" class="block text-sm font-semibold text-slate-700 mb-1">Contraseña</label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-slate-400">
                        🔒
                    </span>
                    <input type="password" id="password" name="password" required
                        class="w-full pl-10 pr-10 py-2.5 bg-slate-50 border border-slate-300 rounded-lg text-slate-800 text-sm focus:outline-none focus:ring-2 focus:ring-blue-600 focus:bg-white transition"
                        placeholder="••••••••••••">
                </div>
            </div>

            <!-- Botón Iniciar Sesión -->
            <button type="submit" 
                class="w-full py-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg shadow-md transition duration-200 text-sm">
                Iniciar sesión
            </button>
        </form>

       

    </div>

</body>
</html>