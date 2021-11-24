{include file='templates/header.tpl'}
{include file='templates/navbar.tpl'}
{if !empty($product)}
    {if !empty($categories)}

        <div class="table-responsive" id="product" data-id="{$product->id_product}">
            <figure>
                {if isset($product->image)}
                    <img src="{$product->image}" />
                {/if}
            </figure>

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
                        <td>{$product->type_category}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        {if ($admin)}
            <div class="container-fluid">
                <h4>Editar Producto:</h4>
                <form class="form-alta" action="./updateProduct/{$product->id_product}" method="post">
                    <div class="form-group">
                        <label for="model">Modelo</label>
                        <input type="text" class="form-control" name="model" id="model" required placeholder="Nuevo modelo">
                    </div>
                    <div class="form-group">
                        <label for="description">Descripcion</label>
                        <input type="text" class="form-control" name="descriptions" id="descriptions" required
                            placeholder="Nueva descrpcion">
                    </div>
                    <div class="form-group">
                        <label for="price">Precio</label>
                        <input type="number" class="form-control" name="price" id="price" required placeholder="Nuevo valor">
                    </div>
                    <div class="form-group">
                        <select name="id_category" id="id_category" placeholder="category" required>
                            {foreach from=$categories item=$category}
                                <option value={$category->id_category}>{$category->type_category}</option>
                            {/foreach}
                        </select>
                    </div>

                    <input type="submit" class="btn btn-primary" value="Confirm Edit">
                </form>
            </div>
        {/if}
        <div class="container">

            <div class="row mt-4">
                {if isset($userName)}
                    <div class="col-md-4">
                        <h2>Comentar</h2>
                        <form id="formComment">
                            <input placeholder="comment_id" type="text" name="comment_id" id="comment_id">
                            <input placeholder="rating_id" type="number" name="rating_id" id="rating_id">
                            <input placeholder="id_product" type="number" name="id_product" id="id_product"
                                value="{$product->id_product}">
                            <input placeholder="id_user" type="number" name="id_user" id="id_user">
                            <input type="submit" class="btn btn-primary" value="Guardar">
                        </form>
                    </div>
                {/if}

                <div class="col-md-8">
                    {include file='templates/vue/comments.tpl'}
                </div>
            </div>


        </div>

        <script src="js/Comments.js"></script>
    {/if}
{/if}
{include file='templates/footer.tpl'}