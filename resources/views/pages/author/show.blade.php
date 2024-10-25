@extends("layouts.app", [
    "title" => $author->full_name,
    "subtitle" => "Books"
])

@section("content")
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="mt-4">{{ __('Author profile') }}</h3>
                </div>
            </div>
            @empty(!$books)
                <div class="row mt-4">
                    @foreach($books as $book)
                        <div class="col-lg-4 mb-4">
                            <a href="#">
                                <div class="card card-background">
                                    <div class="full-background" style="background-image: url({{ asset('img/bg5.jpg') }})"></div>
                                    <div class="card-body pt-12">
                                        <h4 class="text-white">{{ $book->title }}</h4>
                                        <h4 class="text-white">{{ \Illuminate\Support\Str::limit($book->title, 100) }}</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    {{ $books->links() }}
                </div>
            @endempty
        </div>
    </section>

@endsection
