<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="description" content="Admin, Dashboard, Bootstrap" />
        <link rel="shortcut icon" sizes="196x196" href="{{ asset('logo.png') }}">
        
        <link rel="stylesheet" href="{{ asset('admin_assets/dashboard/libs/bower/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin_assets/dashboard/libs/bower/material-design-iconic-font/dist/css/material-design-iconic-font.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin_assets/dashboard/libs/bower/animate.css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin_assets/dashboard/assets/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('admin_assets/dashboard/assets/css/core.css') }}">
        <link rel="stylesheet" href="{{ asset('admin_assets/dashboard/assets/css/misc-pages.css') }}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900,300">
    </head>
    <body class="simple-page">
        <div id="back-to-home">
            <a href="/" class="btn btn-outline btn-default"><i class="fa fa-home animated zoomIn"></i></a>
        </div>

        <div class="simple-page-wrap">
            <div class="simple-page-logo animated swing">
                <a href="/">
                    <span><img src="{{ asset('logo.png') }}"></span>
                    <!-- <span>{{ config('app.name', 'Laravel') }}</span> -->
                </a>
            </div><!-- logo -->

            @yield('content')

        </div><!-- .simple-page-wrap -->
    </body>
</html>

