<style>
    .menuCSS3 ul {
        display: flex;
        padding: 0;
        margin: 0;
        list-style: none;
        
    }

    .menuCSS3 a {
        display: block;
        padding: 2em;
        background-color: gray;
        text-decoration: none;
        color: #191C26;
    }

    .menuCSS3 a:hover {
        background-color: moccasin;
    }

    .menuCSS3 ul li ul {
        display: none;
    }

    .menuCSS3 ul li a:hover+ul,
    .menuCSS3 ul li ul:hover {
        display: block;
    }
</style>

<nav class="menuCSS3">
    <ul>
        <li><a href="{{Route('dashboard')}}">Inicio</a></li>
        <li><a href="#">Productos</a>
            <ul>
                <li><a href="{{ Route('producto-index') }}">Crear producto</a></li>
                <li><a href="#">Opcion 2</a></li>
                <li><a href="#">Opcion 2</a></li>
                <li><a href="#">Opcion 2</a></li>
            </ul>
        </li>

        <li><a href="#">Usuarios</a>
            <ul>
                <li><a href="{{ Route('usuario-index') }}">Crear usuarios</a></li>
                <li><a href="#">Opcion 2</a></li>
            </ul>
        </li>

        <li><a href="#">Categorias</a>
            <ul>
                <li><a href="{{ Route('categoria-index') }}">Crear Categoria</a></li>
                <li><a href="#">Opcion 2</a></li>
            </ul>
        </li>
    </ul>
</nav>

<div class="container">
    <nav class="menuCSS3">
        <!-- Tu menú aquí -->
    </nav>
</div>