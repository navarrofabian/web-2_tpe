<form class="row gy-2 gx-3 align-items-center" action="filter" method="POST">

    <div class="col-auto">
        <label for="customRange2" class="form-label">Precio</label>
        <p>$0 _______________ $1000</p>
        <input type="range" list="tickmarks" class="form-range" min="0" max="1000" name="price" id="price">
    </div>
    <div class="col-auto">
        <label class="visually-hidden" for="autoSizingSelect">Preference</label>
        <select class="form-select" name="category" id="category" >
            <option selected>Categoria: </option>
            {foreach from=$categories item=$category}
                <option value={$category->id_category}>{$category->type_category}</option>
            {/foreach}
        </select>
    </div>
    <div class="col-auto">
        <label class="visually-hidden" for="autoSizingSelect">Preference</label>
        <select class="form-select" name="gaming" id="gaming">
            <option selected>Tipo de producto: </option>
                <option value="1">Gaming</option>
                <option value="0">Office</option>
        </select>
    </div>
    <div class="col-auto">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
