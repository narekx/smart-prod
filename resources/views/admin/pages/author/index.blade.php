@extends('layouts.admin')

@section('content')
    <div class="card card-frame">
        <div class="card-header">
            <h4 class="font-weight-bolder">{{ __('Authors') }}</h4>
            <a class="btn btn-primary" href="{{ route('admin.authors.create') }}">{{ __('Create') }}</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table align-items-center mb-0">
                    <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{ __('Id') }}</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">{{ __('First Name') }}</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">{{ __('Last Name') }}</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">{{ __('Books Count') }}</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">{{ __('Created At') }}</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">{{ __('Updated At') }}</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">{{ __('Actions') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($authors as $author)
                        <tr>
                            <td>
                                {{ $author->id }}
                            </td>
                            <td>
                                {{ $author->first_name }}
                            </td>
                            <td>
                                {{ $author->last_name }}
                            </td>
                            <td>
                                {{ $author->books_count }}
                            </td>
                            <td>
                                {{ $author->created_at }}
                            </td>
                            <td>
                                {{ $author->updated_at }}
                            </td>
                            <td>
                                @include('admin.partials.actions', [
                                    'id' => $author->id,
                                    'name' => 'authors',
                                ])
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $authors->links() }}
            </div>
        </div>
    </div>
@endsection
