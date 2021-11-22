<nav aria-label="...">
  <ul class="pagination">
    <li class="page-item disabled">
      <a class="page-link">Previous</a>
    </li>

    
    {for $foo=1 to $cantPages}
    <li class="page-item"><a class="page-link" href="{$url}?page={$foo}">{$foo}</a></li>
    {/for}



    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>