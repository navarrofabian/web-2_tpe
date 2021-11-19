
{literal}
    <div id="app">
        <h1>{{ titulo }}</h1>
    
        <ul id="lista-tareas" class="list-group">
            <li v-for="comment in comments" class="list-group-item">
                {{comment.comment_content}} | {{comment.rating}}
    
            </li>
        </ul>
    </div>
{/literal}