<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="mt-4">{{ __('Latest Books') }}</h3>
            </div>
        </div>
        @empty(!$books)
            <div class="row mt-4">
                @foreach($books as $book)
                    <div class="col-lg-4 mb-lg-0 mb-4">
                        <a href="#">
                            <div class="card card-background">
                                <div class="full-background" style="background-image: url({{ asset('img/bg2.jpg') }})"></div>
                                <div class="card-body pt-12">
                                    <h4 class="text-white">{{ $book->title }}</h4>
                                    <p class="text-white">{{ \Illuminate\Support\Str::limit($book->description, 100) }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        @endempty
    </div>
</section>
