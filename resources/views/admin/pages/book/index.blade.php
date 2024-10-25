@extends('layouts.admin')

@section('content')
    <div class="card card-frame">
        <div class="card-header">
            <h4 class="font-weight-bolder">{{ __('Books') }}</h4>
            <a class="btn btn-primary" href="{{ route('admin.books.create') }}">{{ __('Create') }}</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table align-items-center mb-0">
                    <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{ __('Id') }}</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">{{ __('Title') }}</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">{{ __('Author') }}</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">{{ __('Description') }}</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">{{ __('Created At') }}</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">{{ __('Updated At') }}</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">{{ __('Actions') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($books as $book)
                        <tr>
                            <td>
                                {{ $book->id }}
                            </td>
                            <td>
                                {{ $book->title }}
                            </td>
                            <td>
                                {{ $book->author->full_name }}
                            </td>
                            <td>
                                {{ \Illuminate\Support\Str::limit($book->description, 100) }}
                            </td>
                            <td>
                                {{ $book->created_at }}
                            </td>
                            <td>
                                {{ $book->updated_at }}
                            </td>
                            <td>
                                @include('admin.partials.actions', [
                                    'id' => $book->id,
                                    'name' => 'books',
                                ])
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $books->links() }}
            </div>
        </div>
    </div>
@endsection
