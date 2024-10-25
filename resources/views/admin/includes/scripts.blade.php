<script src="{{ asset('js/admin/core/popper.min.js') }}"></script>
<script src="{{ asset('js/admin/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/admin/plugins/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('js/admin/plugins/smooth-scrollbar.min.js') }}"></script>

<script src="{{ asset('js/admin/plugins/dragula/dragula.min.js') }}"></script>
<script src="{{ asset('js/admin/plugins/jkanban/jkanban.js') }}"></script>
<script src="{{ asset('js/admin/plugins/chartjs.min.js') }}"></script>
<script src="{{ asset('js/admin/plugins/world.js') }}"></script>

<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>

<script async defer src="https://buttons.github.io/buttons.js"></script>

<script src="{{ asset('js/admin/material-dashboard.min.js%3Fv=3.0.6') }}"></script>
