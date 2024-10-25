<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="mt-4">{{ __('Latest Authors') }}</h3>
            </div>
        </div>
        @empty(!$authors)
            <div class="row mt-4">
                @foreach($authors as $author)
                    <div class="col-lg-4 mb-lg-0 mb-4">
                        <a href="{{ route("authors.show", ["author" => $author->id]) }}">
                            <div class="card card-background">
                                <div class="full-background" style="background-image: url({{ asset('img/bg0.jpg') }})"></div>
                                <div class="card-body pt-12">
                                    <h4 class="text-white">{{ $author->full_name }}</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        @endempty
    </div>
</section>
