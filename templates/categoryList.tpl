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
      {foreach from=$categories item=$category}
      <tr>
        <td>{$category->id_category}</td>
        <td><a href="./viewCategory/{$category->id_category}">{$category->type_category}</td>
        <td>{$category->brand|truncate:30}</td>
        {if isset($userName)}
        <td> <a class="btn btn-warning"loc href="./showPageUpdate/{$category->id_category}">Edit </a></td>
        <td> <a class="btn btn-danger" href="./deletecategory/{$category->id_category}">Delete</a></td> 
       {/if}            
      </tr>
      {/foreach}
    </tbody>
  </table>
</div>

{if isset($userName)}
  <div class="container-fluid">
  <h4>Añadir nueva categoria:</h4>
      <form class="form-alta" action="./loadCategory" method="post">
          <div class="form-group">
              <label for="model">Modelo</label>
              <input type="number" class="form-control" name="id_category" id="id_category" required placeholder="ID">
          </div>
          <div class="form-group">
              <label for="description">Descripcion</label>
              <input type="text" class="form-control" name="type_category" id="type_category" required placeholder="Tipo de categoria">
          </div>
          <div class="form-group">
              <label for="price">Precio</label>
              <input type="text" class="form-control" name="brand" id="brand" required placeholder="Marca">
          </div>
          <button type="submit" class="btn btn-success">Añadir</button>
      </form>
  </div>
{/if}
{include file='templates/footer.tpl'}