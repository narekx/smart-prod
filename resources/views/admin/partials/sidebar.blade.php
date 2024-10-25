<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
           aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="{{ route("home") }}">
            <img src="{{ asset('img/admin/logo-ct.png') }}" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold text-white">{{ config('app.name', 'Smart') }}</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto h-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item mb-2 mt-0">
                <a data-bs-toggle="collapse" href="#ProfileNav" class="nav-link text-white"
                   aria-controls="ProfileNav" role="button" aria-expanded="false">
                    <img src="{{ asset('img/admin/team-3.jpg') }}" class="avatar">
                    <span class="nav-link-text ms-2 ps-1">{{ auth()->user()->name }}</span>
                </a>
                <div class="collapse" id="ProfileNav" style>
                    <ul class="nav ">
                        <li class="nav-item">
                            <form id="logout-form" method="POST" action="{{ route("logout") }}">
                                @csrf
                            </form>

                            <a onclick="event.preventDefault(); document.querySelector('#logout-form')?.submit();" class="nav-link text-white " href="#">
                                <span class="sidenav-mini-icon"> L </span>
                                <span class="sidenav-normal  ms-3  ps-1"> {{ __("Logout") }} </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <hr class="horizontal light mt-0">
            <li class="nav-item">
                <a href="{{ route('admin.dashboard') }}" class="nav-link text-white"
                   aria-controls="dashboardsExamples" role="button">
                    <i class="material-icons-round opacity-10">dashboard</i>
                    <span class="nav-link-text ms-2 ps-1">{{ __("Dashboard") }}</span>
                </a>
            </li>
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#authors" class="nav-link text-white "
                   aria-controls="pagesExamples" role="button" aria-expanded="false">
                    <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">category</i>
                    <span class="nav-link-text ms-2 ps-1">{{ __("Author") }}</span>
                </a>
                <div class="collapse " id="authors">
                    <ul class="nav ">
                        <li class="nav-item ">
                            <a class="nav-link text-white " href="{{ route('admin.authors.index') }}">
                                <span class="sidenav-mini-icon"> I </span>
                                <span class="sidenav-normal  ms-2  ps-1">{{ __("Index") }}</span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-white " href="{{ route('admin.authors.create') }}">
                                <span class="sidenav-mini-icon"> C </span>
                                <span class="sidenav-normal  ms-2  ps-1"> {{ __("Create") }} </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#books" class="nav-link text-white "
                   aria-controls="pagesExamples" role="button" aria-expanded="false">
                    <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">book</i>
                    <span class="nav-link-text ms-2 ps-1">{{ __("Book") }}</span>
                </a>
                <div class="collapse " id="books">
                    <ul class="nav ">
                        <li class="nav-item ">
                            <a class="nav-link text-white " href="{{ route('admin.books.index') }}">
                                <span class="sidenav-mini-icon"> I </span>
                                <span class="sidenav-normal  ms-2  ps-1">{{ __("Index") }}</span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-white " href="{{ route('admin.books.create') }}">
                                <span class="sidenav-mini-icon"> C </span>
                                <span class="sidenav-normal  ms-2  ps-1"> {{ __("Create") }} </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</aside>
