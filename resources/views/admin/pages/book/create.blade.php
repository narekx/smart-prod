@extends('layouts.admin')

@section('content')
    <div class="card card-frame">
        <div class="card-header">
            <h4 class="font-weight-bolder">{{ __('Create book') }}</h4>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('admin.books.store') }}">
                @csrf

                <div class="input-group input-group-static mb-4">
                    <label>{{ __('Title') }}</label>
                    <input
                        type="text"
                        name="title"
                        aria-label="Title"
                        placeholder="Title"
                        class="form-control"
                        value="{{ old('title') }}"
                    >
                    @error('title')
                    <div class="text-danger">
                        <strong>{{ $errors->get("title")[0] }}</strong>
                    </div>
                    @enderror
                </div>

                <div class="input-group input-group-static mb-4">
                    <label for="author_id" class="ms-0">{{ __("Author") }}</label>
                    <select class="form-control" id="author_id" name="author_id">
                        @foreach($authors as $authorId => $author)
                            <option
                                value="{{ $authorId }}"
                                {{ (!empty(old('author_id')) && old('author_id') === $authorId) ? 'selected' : '' }}
                            >
                                {{ $author }}
                            </option>
                        @endforeach
                    </select>
                    @error('author_id')
                    <div class="text-danger">
                        <strong>{{ $errors->get("author_id")[0] }}</strong>
                    </div>
                    @enderror
                </div>

                <div>
                    <label for="description" class="ms-0">{{ __("Description") }}</label>
                    <div class="input-group input-group-dynamic mb-4">
                    <textarea
                        rows="5"
                        name="description"
                        id="description"
                        spellcheck="false"
                        class="form-control"
                        placeholder="Description"
                    >
                        {{ old('description') ?? '' }}
                    </textarea>
                    </div>
                    @error('description')
                    <div class="text-danger">
                        <strong>{{ $errors->get("description")[0] }}</strong>
                    </div>
                    @enderror
                </div>

                <div class="text-left">
                    <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg mt-4 mb-0">{{ __('Create') }}</button>
                </div>
            </form>
        </div>
    </div>
@endsection
