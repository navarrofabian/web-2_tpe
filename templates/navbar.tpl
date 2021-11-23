<nav class="navbar navbar-expand-lg navbar-light bg-light">


    <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li><a class="navbar-brand" href="page/1">Inicio</a></li>
        <li><a class="navbar-brand" href="login">Ingresar</a></li>
        <li><a class="navbar-brand" href="register">Registrarse</a></li>
        <li><a class="navbar-brand" href="allCategories/">Todas las categorias</a></li>
        {if isset($admin)}
            <li><a class="navbar-brand" href="users">Usuarios</a></li>
        {/if}
        {if isset($userName)}
            <li><a class="navbar-brand" href="page/1">{$userName} </a></li>
            <li><a class="navbar-brand" href="logout">Salir </a></li>
        {/if}
    </ul>

</nav>