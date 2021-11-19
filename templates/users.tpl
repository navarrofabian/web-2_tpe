<div class="table-responsive">
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre de usuario</th>
                <th>Email</th>
                <th>Permisos de Administrador</th>
            </tr>
        </thead>
        <tbody>
            {foreach from=$users item=$user}
                <tr>
                    <td>{$user->id_user}</td>
                    <td>{$user->userName}</td>
                    <td>{$user->email}</td>
                    <td>{$user->admin}</td>
                </tr>
            {/foreach}
        </tbody>
    </table>
</div>