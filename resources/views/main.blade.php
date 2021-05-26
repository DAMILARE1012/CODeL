<!doctype html>
<html lang="en">

<head>
    @include('partials._head')
</head>

<body class="">
    <div id="wrapper" class="clearfix">
        {{-- Pre-Loader --}}
        <div id="preloader">
            <div id="spinner">
                <div class="preloader-dot-loading">
                    <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
                </div>
            </div>
            <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
        </div>
        {{-- End Pre-Loader --}}

        @include('partials._navbar')

        @yield('content')

        @include('partials._footer')

        {{-- End of the container --}}
    </div>
    @include('partials._javascript')

</body>

</html>
