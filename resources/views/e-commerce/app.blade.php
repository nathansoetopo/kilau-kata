<!DOCTYPE html>
<html>

@include('e-commerce.component.head')

<body>
    <div class="hero_area">
        {{-- Navbar --}}
        @include('e-commerce.component.navbar')

        <!-- end header section -->
        @yield('page-section')

        <!-- footer start -->
        @includeIf('e-commerce.component.footer')
        <!-- footer end -->
        <div class="cpy_">
            <p class="mx-auto">© 2022 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>

                Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>

            </p>
        </div>
        <!-- jQery -->
        <script src="{{asset('e-commerce/js/jquery-3.4.1.min.js')}}"></script>
        <!-- popper js -->
        <script src="{{asset('e-commerce/js/popper.min.js')}}"></script>
        <!-- bootstrap js -->
        <script src="{{asset('e-commerce/js/bootstrap.js')}}"></script>
        <!-- custom js -->
        <script src="{{asset('e-commerce/js/custom.js')}}"></script>
</body>

</html>
