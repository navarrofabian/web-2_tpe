{include file='templates/header.tpl'}
{include file='templates/navbar.tpl'}
<div class="table-responsive">
    <table class="table table-bordered">
        <thead class="table-dark">
        <tr>
            <th>Model</th>
            <th>Description</th>
            <th>Price</th>
            <th>Category</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{$product->model}</td>
            <td>{$product->descriptions|truncate:30}</td>
            <td>${$product->price}</td>
            <td>{foreach from=$categories item=$category}
                {if $product->id_category == $category->id_category}{$category->type_category}</a>
                {/if}
            {/foreach}
            </td>
        </tr>
    </tbody>
</table>
</div>
{if isset($email)}
    <div class="container-fluid">
    <h4>Editar Producto:</h4>
       <form class="form-alta" action="./updateProduct/{$product->id_product}" method="post">
            <div class="form-group">
                <label for="model">Modelo</label>
                <input type="text" class="form-control" name="model" id="model" required placeholder="Nuevo modelo">
            </div>
            <div class="form-group">
                <label for="description">Descripcion</label>
                <input type="text" class="form-control" name="descriptions" id="descriptions" required placeholder="Nueva descrpcion">
            </div>
            <div class="form-group">
                <label for="price">Precio</label>
                <input type="number" class="form-control" name="price" id="price" required placeholder="Nuevo valor">
            </div>
            <div class="form-group">
                <select name="id_category" id="id_category" placeholder="category" required>
                    {foreach from=$categories item=$category}
                        <option value={$category->id_category}>{$category->id_category}/{$category->type_category}</option>
                    {/foreach}
                </select>
            </div>

            <input type="submit" class="btn btn-primary" value="Confirm Edit">
        </form>
    </div>
{/if}

<div class="col-md-4">
<h2>Comentar</h2>
<form class="form-alta" action="createComment" method="post">
    <input placeholder="content" type="text" name="content" id="content" required>
    <textarea placeholder="rating" type="number" name="rating" id="rating"> </textarea>
    <input type="submit" class="btn btn-primary" value="comentar">
</form>
</div>
{include file='templates/vue/comments.tpl'}
<script src="js/Comments.js"></script>

{include file='templates/footer.tpl'}



