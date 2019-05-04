@if ($paginator->hasPages())

    <div class="flex items-center justify-center">
        <ul class="flex list-reset border border-grey-light rounded w-auto">

            @if ($paginator->onFirstPage())
                <li>
                    <span class="block text-grey-light border-r border-grey-light px-3 py-2">&laquo;</span>
                </li>
            @else
                <li>
                    <a class="no-underline block hover:text-grey-dark hover:bg-grey-light text-grey-dark border-r border-grey-light px-3 py-2" href="{{ $paginator->previousPageUrl() }}" rel="prev">
                        &laquo;
                    </a>
                </li>
            @endif

            @foreach ($elements as $element)

                @if (is_string($element))
                    <li class="block text-primary-action border-r border-grey-light px-3 py-2">
                        <span>{{ $element }}</span>
                    </li>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="block text-white bg-primary-action border-r border-grey-light px-3 py-2">
                                <span>
                                {{ $page }}
                                </span>
                            </li>
                        @else
                            <li>
                                <a class="block border-r border-grey-light px-3 py-2 no-underline text-grey-dark hover:text-grey-dark bg-white hover:bg-grey-light" href="{{ $url }}">
                                    {{ $page }}
                                </a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            @if ($paginator->hasMorePages())
                <li>
                    <a class="no-underline block hover:text-grey-dark hover:bg-grey-light text-grey-dark border-r border-grey-light px-3 py-2" href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a>
                </li>
            @else
                <li>
                    <span class="block text-grey-light border-r border-grey-light px-3 py-2">&raquo;</span>
                </li>
            @endif
        </ul>
    </div>

@endif