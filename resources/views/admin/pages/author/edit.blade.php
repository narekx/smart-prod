@extends('layouts.admin')

@section('content')
    <div class="card card-frame">
        <div class="card-header">
            <h4 class="font-weight-bolder">{{ __('Edit author') }}</h4>
        </div>
        <div class="card-body">
            <form
                method="post"
                action="{{ route('admin.authors.update', $author->id) }}"
            >
                @csrf
                @method('put')

                <div class="input-group input-group-static mb-4">
                    <label>{{ __("First Name") }}</label>
                    <input
                        type="text"
                        name="first_name"
                        aria-label="First Name"
                        placeholder="First Name"
                        class="form-control"
                        value="{{ old('first_name') ?? $author->first_name }}"
                    >
                    @error('first_name')
                    <div class="text-danger">
                        <strong>{{ $errors->get("first_name")[0] }}</strong>
                    </div>
                    @enderror
                </div>

                <div class="input-group input-group-static mb-4">
                    <label>{{ __("Last Name") }}</label>
                    <input
                        type="text"
                        name="last_name"
                        aria-label="Last Name"
                        placeholder="Last Name"
                        class="form-control"
                        value="{{ old('last_name') ?? $author->last_name }}"
                    >
                    @error('last_name')
                    <div class="text-danger">
                        <strong>{{ $errors->get("last_name")[0] }}</strong>
                    </div>
                    @enderror
                </div>

                <div class="text-left">
                    <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg mt-4 mb-0">{{ __('Update') }}</button>
                </div>
            </form>
        </div>
    </div>
@endsection
