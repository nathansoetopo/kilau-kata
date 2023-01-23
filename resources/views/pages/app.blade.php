<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">

@include('pages.component.head')

<body class="u-body u-xl-mode" data-lang="en">
    @include('includes.navbar')

    @yield('main')

    @include('includes.footer')
</body>

</html>
