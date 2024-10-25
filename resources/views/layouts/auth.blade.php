<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        name
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

<section>
    <div class="page-header min-vh-100">
        <div class="container">
            <div class="row">
                @yield('content')
            </div>
        </div>
    </div>
</section>

@include('partials.footer')

@include('includes.scripts')
</body>
</html>
