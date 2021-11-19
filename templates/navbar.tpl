<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li><a class="navbar-brand" href="home">Inicio</a></li>
        <li><a class="navbar-brand" href="login">Ingresar</a></li>
        <li><a class="navbar-brand" href="register">Registrarse</a></li>
        <li><a class="navbar-brand" href="allCategories/">Todas las categorias</a></li>
        {if isset($admin)}
            <li><a class="navbar-brand" href="users">Usuarios</a></li>   
        {/if}
        {if isset($userName)}
            <li><a class="navbar-brand" href="home">{$userName} </a></li>
            <li><a class="navbar-brand" href="logout">Salir </a></li>      
        {/if}
    </ul>
</nav>