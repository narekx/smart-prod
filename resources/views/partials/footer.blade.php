<footer class="footer pt-5 mt-5">
    <div class="container">
        <div class=" row">
            <div class="col-md-3 mb-4 ms-auto">
                <div>
                    <a href="#">
                        <img src="{{ asset('img/logo-ct-dark.png') }}" class="mb-3 footer-logo" alt="main_logo">
                    </a>
                    <h6 class="font-weight-bolder mb-4">{{ config('app.name', 'Smart') }}</h6>
                </div>
            </div>
            <div class="col-12">
                <div class="text-center">
                    <p class="text-dark my-4 text-sm font-weight-normal">
                        {{ __('All rights reserved. Copyright ©') }} <script>
                            document.write(new Date().getFullYear())
                        </script> {{ __('by Narek Hovsepyan') }}</a>.
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
