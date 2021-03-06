<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="page/1">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="allCategories/">Categorias</a>
                </li>
                {if !isset($userName)}
                    <li class="nav-item">
                        <a class="nav-link" href="login">Ingresar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register">Registrarse</a>
                    </li>
                {/if}
                {if ($admin)}
                    <li class="nav-item">
                        <a class="nav-link" href="users">Usuarios</a>
                    </li>
                {/if}

                {if isset($userName)}
                    <li class="nav-item">
                        <a class="nav-link disabled">{$userName}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout">Salir</a>
                    </li>
                {/if}

            </ul>
            <form class="d-flex" action="search" method="post">
                <input class="form-control me-2" name="search" id="search" type="search" placeholder="productos..." aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
        </div>
    </div>
</nav>