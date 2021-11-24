{include file='templates/header.tpl'}
{include file='templates/navbar.tpl'}
<div class="table-responsive">
{if ($admin)}
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre de usuario</th>
                <th>Email</th>
                <th>Permisos de Administrador</th>
                <th>Eliminar Usuarios</th>
            </tr>
        </thead>
        <tbody>
            {foreach from=$users item=$user}
                <tr>
                    <td>{$user->id_user}</td>
                    <td>{$user->userName}</td>
                    <td>{$user->email}</td>
                    <!--verificar si el user->admin es true y mostrar -->
                    <td>{if $user->admin == 1}
                            <a href="editAccess/{$user->id_user}">
                                <button type="button" class="btn btn-success">
                                    <i class="fas fa-check"></i>
                                </button>
                            </a>
                    </td>

                    {/if}
                        {if $user->admin == 0}
                            <a href="editAccess/{$user->id_user}">
                                <button type="button" class="btn btn-danger">
                                    <i class="fas fa-times"></i>
                                </button>
                            </a>
                    </td>
                    <td>
                            <a href="deleteUser/{$user->id_user}">
                            <button type="button" class="btn btn-outline-danger">Eliminar</button>
                        </a>
                    </td>
                        {/if}
                    

                   
                </tr>
            {/foreach}
        </tbody>
    </table>
{/if}
</div>

{include file='templates/footer.tpl'}
