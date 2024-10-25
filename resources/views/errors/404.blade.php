<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        {{ config('app.name', 'Smart') }} }}
    </title>

    @include('includes.styles')
</head>
<body class="presentation-page bg-gray-200">

<div class="container position-sticky z-index-sticky top-0">
    <div class="row">
        <div class="col-12">
            @include('partials.navbar')
        </div>
    </div>
</div>

<div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/uploads/1413399939678471ea070/2c0343f7?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80');" loading="lazy">
    <span class="mask bg-gradient-dark opacity-6"></span>
    <div class="container my-auto">
        <div class="row">
            <div class="col-lg-12 m-auto text-center">
                <h1 class="display-1 text-bolder text-white">{{ __('Error 404') }}</h1>
                <h2 class="text-white">{{ __('Erm. Page not found') }}</h2>
                <p class="lead text-white">{{ __('We suggest you to go to the homepage while we solve this issue.') }}</p>
                <a href="{{ route('home') }}" class="btn bg-gradient-warning mt-4">{{ __('Go to Homepage') }}</a>
            </div>
        </div>
    </div>
</div>

@include('includes.scripts')
</body>
</html>
