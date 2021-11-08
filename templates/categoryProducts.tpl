{include file='templates/header.tpl'}
{include file='templates/navbar.tpl'}


<div class="table-responsive">
<h3>Todos los productos de la categoria</h3>
<table class="table table-bordered">
        <thead class="table-dark">
      <tr>
        <th>Id product</th>
        <th>Model</th>
        <th>Description</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
      {foreach from=$Category item=$Product}
      <tr>
        <td>{$Product->id_product} </td>
        <td>{$Product->model}</td>
        <td>{$Product->descriptions|truncate:30}</td>
        <td>{$Product->price}</td>
      </tr>
      {/foreach}
    </tbody>

  </table>     
</div>

{include file='templates/footer.tpl'}

