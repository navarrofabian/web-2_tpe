{literal}
    <h3> Filtrar por puntaje </h3>

    <form id="form_filtro">
        <select name="rating" required class="form-control form-control-lg">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <input id ="filter" type="submit" value="filtrar"class="btn btn-outline-success">
        <input id="getComm" type="submit" name="getComm" value="Mostrar todos" class="btn btn-light">
    </form>
    
    <h3> Ordenar por </h3>
    
    <form id="form_orden">
        <select name="sort" required class="form-control form-control-lg">
            <option value="id_comment">Fecha</option>
            <option value="rating">Puntaje</option>
        </select>
        <select name="order" required class="form-control form-control-lg">
            <option value="asc">Ascendente</option>
            <option value="desc">Descendente</option>
        </select>
        <input id="orderBy" type="submit" value="Ordenar" class="btn btn-outline-success">
        
    </form>    

    <div id="app">
        <h1>{{ titulo }}</h1>

        <ul id="lista-tareas" class="list-group">
            <li v-for="comment in comments" class="list-group-item">
             {{comment.comment_content}} -- puntaje : {{comment.rating}}   nombre :  {{comment.userName}}
             <a v-if="admin == '1'" v-on:click="deleteComm(comment.id_comment)" data-id="comment.id_comment" class="btn btn-outline-danger">Borrar</a></li>
            </li>
        </ul>
    </div>
{/literal}