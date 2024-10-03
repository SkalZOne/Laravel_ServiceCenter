@vite(['resources/scss/pagination.scss', 'resources/css/pagination.css'])

@if ($paginator->hasPages())
    <nav class="pagination">
        <div class="pagination__container">
            @foreach ($elements as $element)
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <a class="pagination__container__link" href="#"><img src="/image/square-page-selected.svg" alt="page-link-selected"></a>
                        @else
                            <a class="pagination__container__link" href="{{ $url }}"><img src="/image/square-page.svg" alt="page-link"></a>
                        @endif
                    @endforeach
                @endif
            @endforeach
        </div>
    </nav>
@endif