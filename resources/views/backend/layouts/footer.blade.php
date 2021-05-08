    </div> {{-- end row --}}
</div> {{-- end container fluid --}}


<script src="{{ asset('/assets/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('/assets/js/bootstrap.bundle.min.js') }}"></script>
<script>

   $(document).ready(function() {
            $('.card-header').each(function() {
                $(this).addClass(localStorage.getItem('theme-color'));
            });
            $('.nav-link').each(function() {
                $(this).addClass(localStorage.getItem('theme-color'));
            });
            $('.nav').each(function() {
                $(this).addClass(localStorage.getItem('theme-color'));
            });

        });
</script>
@yield('footer')
</body>

</html>
