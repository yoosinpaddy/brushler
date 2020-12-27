@if ($paginator->lastPage() > 1)
{{-- <nav>
    <ul class="pagination pull-right">
        <li class="active"><a href="#">1</a></li>
        <li><a href="?page=2">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#" class="previous"><i class="fa fa-angle-left"></i></a></li>
        <li><a href="#" class="next"><i class="fa fa-angle-right"></i></a></li>
    </ul>
</nav> --}}
<ul class="pagination pull-right">
    <li class="{{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}">
        <a href="{{ $paginator->url(1) }}" class="previous"><i class="fa fa-angle-left"></i></a>
    </li>
    @for ($i = 1; $i <= $paginator->lastPage(); $i++)
        <li class="{{ ($paginator->currentPage() == $i) ? ' active' : '' }}">
            <a href="{{ $paginator->url($i) }}">{{ $i }}</a>
        </li>
    @endfor
    <li class="{{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}">
        <a href="{{ $paginator->url($paginator->currentPage()+1) }}"  class="next"><i class="fa fa-angle-right"></i></a>
    </li>
</ul>
@endif
