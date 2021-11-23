<form class="d-flex" action="order" method="POST">
    <select class="form-select" aria-label="Default select example">
        <option selected>Ordenar por:</option>
        <option value="id">Antiguedad</option>
        <option value="rating">Puntaje</option>
    </select>
    <select class="form-select" name="order" id="order" placeholder="order" aria-label="Default select example">>
        <option selected>Elegir orden:</option>
        <option value="ASC">Ascendente</option>
        <option value="DESC">Descendente</option>
    </select>



    <button type="button" class="btn btn-dark">Ordenar</button>
</form>