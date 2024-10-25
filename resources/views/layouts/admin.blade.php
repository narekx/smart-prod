<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        {{ __('Dashboard') }}
    </title>

    @include('admin.includes.styles')
</head>
<body class="g-sidenav-show  bg-gray-200">

@include('admin.partials.sidebar')

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

    @include('admin.partials.navbar')


    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-lg-12 position-relative z-index-2">
                @yield('content')
            </div>
        </div>
        @include('admin.partials.footer')
    </div>
</main>

@include('admin.includes.scripts')
</body>
</html>
