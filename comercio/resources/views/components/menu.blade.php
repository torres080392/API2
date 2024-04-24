<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">USANDO LARAVEL </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">
                        <i class="fas fa-home"></i> Inicio
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-users"></i> Usuarios
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                        <li><a class="dropdown-item" href="{{ Route('usuario-index') }}"><i class="fas fa-user"></i> Menu Usuarios</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-cog"></i> Servicio 2</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-cog"></i> Servicio 3</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-list"></i> Categorias
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                        <li><a class="dropdown-item" href="{{ Route('categoria-index') }}"><i class="fas fa-tags"></i> Menu Categorias</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-cog"></i> Opcion 2</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-cog"></i> Opcion 3</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-shopping-cart"></i> Productos <!-- Icono de carrito de compras para representar productos -->
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                        <li><a class="dropdown-item" href="{{Route('producto-index')}}"><i class="fas fa-tags"></i> Menu Productos</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-cog"></i> Opcion 2</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-cog"></i> Opcion 3</a></li>
                    </ul>
                </li>
                
              
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-envelope"></i> Contacto
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-info-circle"></i> Acerca de
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Agrega este enlace al CDN de Font Awesome en tu archivo HTML -->
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
