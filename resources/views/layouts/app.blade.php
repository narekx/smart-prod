<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        {{ config('app.name', 'Smart') }}
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
@include('partials.header', [
    'title' => $title ?? config('app.name', 'Smart'),
    'subtitle' => $subtitle ?? 'Welcome',
    'image' => $image ?? asset('img/bg0.jpg')
])
<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">
    @yield('content')
</div>

@include('partials.footer')

@include('includes.scripts')
</body>
</html>
