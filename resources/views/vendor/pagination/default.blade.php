@if($paginator->hasPages())
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="dataTables_paginate paging_full_numbers" id="datatables_paginate">
                <nav aria-label="...">
                    <ul class="pagination">
                        <li class="page-item {{ $paginator->onFirstPage() ? 'disabled' : '' }}">
                            <a class="page-link" href="{{ $paginator->previousPageUrl() }}"><<</a>
                        </li>
                        @foreach($elements as $element)
                            @if (is_string($element))
                                <li class="page-item disabled"><span>{{ $element }}</span></li>
                            @endif

                            @if(is_array($element))
                                @foreach($element as $page => $url)
                                    @if ($page == $paginator->currentPage())
                                        <li class="page-item active">

                                            <span class="page-link">
                                                {{ $page }}
                                                <span class="sr-only">(current)</span>
                                            </span>
                                        </li>
                                    @else
                                        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                        <li class="page-item {{ $paginator->onLastPage() ? 'disabled' : '' }} ">
                            <a class="page-link" href="{{ $paginator->nextPageUrl() }}">>></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endif
