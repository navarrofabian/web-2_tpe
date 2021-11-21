{include file='templates/header.tpl'}
{include file='templates/navbar.tpl'}


<div class="table-responsive">
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Id product</th>
                <th>Model</th>
                <th>Description</th>
                <th>Price</th>
                <th>Category</th>
            </tr>
        </thead>
        <tbody>
            {foreach from=$products item=$product}
                <tr>
                    <td>{$product->id_product}</td>
                    <td><a href="viewProduct/{$product->id_product}">{$product->model}</td>
                    <td>{$product->descriptions|truncate:30}</td>
                    <td>${$product->price}</td>
                    <td>{foreach from=$categories item=$category}
                            {if $product->id_category == $category->id_category}<a
                                href="viewCategory/{$category->id_category}">{$category->type_category}</a>{/if}
                        {/foreach}</td>
                    {if isset($userName)}
                        <td><a class="btn btn-danger" href="deleteProduct/{$product->id_product}">Delete</a></td>
                    {/if}

                </tr>
            {/foreach}
        </tbody>
    </table>
</div>
<div class="container-">

</div>


{if isset($userName)}
    <div class="container-fluid">
        <h4>Añadir nuevo producto:</h4>
        <form action="loadProduct" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="model">Modelo</label>
                <input type="text" class="form-control" name="model" id="model" required placeholder="Ingrese el modelo">
            </div>
            <div class="form-group">
                <label for="description">Descripción</label>
                <input type="text" class="form-control" name="descriptions" id="descriptions" required
                    placeholder="Ingrese una descrpcion">
            </div>
            <div class="form-group">
                <label for="price">Precio</label>
                <input type="number" class="form-control" name="price" id="price" required placeholder="Ingrese el valor">
            </div>
            <div class="form-group">
                <select name="id_category" id="id_category" placeholder="category" required>
                    {foreach from=$categories item=$category}
                        <option value={$category->id_category}>{$category->id_category}/{$category->type_category}</option>
                    {/foreach}
                </select>
            </div>
            <div class="form-group">
                <input type="file" name="input_name" id="imageToUpload">
            </div>


            <button type="submit" class="btn btn-success">Cargar</button>
        </form>
        
    </div>
{/if}
{if isset($error)}
<h4 class="alert-danger">{$error}</h4>
{/if}

{include file='templates/footer.tpl'}