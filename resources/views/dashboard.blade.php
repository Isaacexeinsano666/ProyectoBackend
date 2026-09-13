<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - UCSC</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 min-h-screen">

    <!-- Barra superior / Navbar -->
    <nav class="bg-blue-900 text-white px-6 py-4 flex justify-between items-center shadow-md">
        <div class="font-bold text-lg tracking-wider">UCSC - Control de Acceso</div>
        <div>
            <span class="mr-4 text-sm">Bienvenido, Administrador</span>
            <form action="{{ route('logout') }}" method="POST" class="inline">
                @csrf
                <button type="submit" class="bg-red-600 hover:bg-red-700 px-3 py-1 rounded text-sm transition">Cerrar sesión</button>
            </form>
        </div>
    </nav>

    <!-- Contenido principal -->
    <main class="p-8 max-w-7xl mx-auto">
        <h1 class="text-2xl font-bold text-slate-800 mb-6">Pantalla principal (Dashboard)</h1>

        <!-- Tarjetas de métricas rápidas (KPIs del mockup) -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
            <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-200">
                <p class="text-sm text-slate-500 font-medium">Personas registradas</p>
                <p class="text-3xl font-bold text-slate-800 mt-2">4.528</p>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-200">
                <p class="text-sm text-slate-500 font-medium">Vehículos registrados</p>
                <p class="text-3xl font-bold text-slate-800 mt-2">823</p>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-200">
                <p class="text-sm text-slate-500 font-medium">Ingresos hoy</p>
                <p class="text-3xl font-bold text-emerald-600 mt-2">1.204</p>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-200">
                <p class="text-sm text-slate-500 font-medium">Salidas hoy</p>
                <p class="text-3xl font-bold text-rose-600 mt-2">1.096</p>
            </div>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-200">
            <h2 class="text-lg font-semibold text-slate-800 mb-4">Estado del sistema</h2>
            <p class="text-slate-600 text-sm">Has iniciado sesión correctamente en el sistema de control de acceso de la universidad.</p>
        </div>
    </main>

</body>
</html>