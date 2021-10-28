@if ($paginator->hasPages())

<nav class="pagination">
  <ul>
    <li class="prev-pagination">
      <a href="{{ $paginator->previousPageUrl() }}">
        &nbsp;
        <i class="fa fa-angle-left"></i>
        Previous &nbsp;
      </a>
    </li>
    @foreach ($elements as $element )
    @foreach ($element as $page => $url)
    <li>
      <a href="{{ $url }}">{{ $page }}</a>
    </li>
    @endforeach
    @endforeach
    <li class="next_pagination">
      <a href="{{ $paginator->nextPageUrl() }}">
        &nbsp; Next
        <i class="fa fa-angle-right"></i>
        &nbsp;
      </a>
    </li>
  </ul>
</nav>
@endif
