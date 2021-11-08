{include file='templates/header.tpl'}
{include file='templates/navbar.tpl'}



<div class="table-responsive">
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID Category</th>
                <th>Category Type</th>
                <th>Brand</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{$Category->id_category}</td>
                <td>{$Category->type_category}</td>
                <td>{$Category->brand|truncate:30}</td>
            </tr>
        </tbody>
    </table>
</div>
{if isset($email)}
    <div class="container-fluid">
        <h4>Añadir Nueva Categoria:</h4>
        <form class="form-alta" action="./updateCategory/{$Category->id_category}" method="post">
            <div class="form-group">
                <label for="model">Modelo</label>
                <input type="number" class="form-control" name="id_category" id="id_category" required
                    placeholder="Nuevo ID">
            </div>
            <div class="form-group">
                <label for="description">Descripcion</label>
                <input type="text" class="form-control" name="type_category" id="type_category" required
                    placeholder="Nuevo Tipo de categoria">
            </div>
            <div class="form-group">
                <label for="price">Precio</label>
                <input type="text" class="form-control" name="brand" id="brand" required placeholder="Nueva Marca">
            </div>
            <button type="submit" class="btn btn-warning">Editar</button>
        </form>
    </div>
{/if}

{include file='templates/footer.tpl'}