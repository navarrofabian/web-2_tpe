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
            </div>
            </div>
        {/if}
        {if isset($userName)}
            <div class="cont-comm">
                <div class="col-md-6">
                    <h2>Comentar</h2>
                    <form id="formComment">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" type="text" name="comment_id"
                                id="comment_id" style="height: 100px"></textarea>
                            <label for="floatingTextarea2">Comments</label>
                        </div>
                        <div class="col-md-4">
                            <label for="customRange2" class="form-label">Puntuacion</label>
                        <input name="rating_id" id="rating_id" type="range" class="form-range" min="1" max="5" id="customRange2
                                       </div>

                                     <div hidden>
                                        <input placeholder=" id_user" type="text" name="id_user" id="id_user"
                            value="{$userName}">
                    </div>
                    <div hidden>
                        <input placeholder=" id_product" type="number" name="id_product" id="id_product"
                            value="{$product->id_product}">
                    </div>
                    <input type="submit" class="btn btn-primary" value="Guardar">
                </form>

            </div>

        {/if}


                    {include file='templates/vue/comments.tpl'}










                {/if}


                {/if}
    <script src="js/Comments.js"></script>
{include file='templates/footer.tpl'}