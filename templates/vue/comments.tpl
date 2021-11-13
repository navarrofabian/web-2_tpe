

{literal}
    <div id="comment">
        <h1>{{ titulo }}</h1>

        <ul id="comments" class="list-group">
            <li v-for="comment in comments" class="list-group-item">
                {{comment.comment_content}} | {{comment.rating}}
            </li>
        </ul>
    </div>
{/literal}