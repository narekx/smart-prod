<nav class="navbar navbar-expand-lg  blur border-radius-xl top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
    <div class="container-fluid px-0">
        <a class="navbar-brand font-weight-bolder ms-sm-3  d-none d-md-block" href="{{ route('home') }}" rel="tooltip" data-placement="bottom">
            {{ config('app.name', 'Smart') }}
        </a>
        <a class="navbar-brand font-weight-bolder ms-sm-3  d-block d-md-none" href="{{ route('home') }}" rel="tooltip" data-placement="bottom">
            {{ config('app.name', 'Smart') }}
        </a>
        <button class="navbar-toggler shadow-none ms-md-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </span>
        </button>
        <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0" id="navigation">
            <ul class="navbar-nav navbar-nav-hover ms-auto">
                <li class="nav-item dropdown dropdown-hover mx-2">
                    <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" href="{{ route("authors.index") }}">
                        <i class="material-icons opacity-6 me-2 text-md">category</i>
                        {{ __('Authors') }}
                    </a>
                </li>
                <li class="nav-item dropdown dropdown-hover mx-2">
                    <a role="button" class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuAccount" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="material-icons opacity-6 me-2 text-md">contacts</i>
                        Account
                        <img src="{{ asset('img/down-arrow-dark.svg') }}" alt="down-arrow" class="arrow ms-2 d-lg-block d-none">
                        <img src="{{ asset('img/down-arrow-dark.svg') }}" alt="down-arrow" class="arrow ms-1 d-lg-none d-block ms-auto">
                    </a>
                    <div class="dropdown-menu dropdown-menu-animation dropdown-md border-radius-xl p-3 mt-0 mt-lg-3" aria-labelledby="dropdownMenuAccount">
                        <div class="d-none d-lg-flex">
                            <ul class="list-group w-100">
                                @if(Auth::guest())
                                    <li class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                        <a class="dropdown-item py-2 ps-3 border-radius-md" href="{{ route('login') }}">
                                            {{ __('Sign In') }}
                                        </a>
                                    </li>
                                @else
                                    @if(is_admin())
                                        <li class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                            <a class="dropdown-item py-2 ps-3 border-radius-md" href="{{ route('admin.dashboard') }}">
                                                {{ __('Admin') }}
                                            </a>
                                        </li>
                                    @endif
                                    <li class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                        <a
                                            class="dropdown-item py-2 ps-3 border-radius-md"
                                            href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                        >
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
