<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título de tu página</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @livewireStyles
</head>
<body>
    @include('components.barramenu')
    <!-- Incluir el componente del encabezado -->
    

    <!-- Contenido principal de tu página -->
    <livewire:liwevireproducto />
   
    @livewireScripts
</body>
</html>

