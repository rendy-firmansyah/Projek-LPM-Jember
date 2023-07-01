<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') LPM Jember</title>
    <link rel="icon" href="{{asset('img/icon-lpm.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset("/modernize/src/assets/css/styles.min.css")}}" />
</head>
<body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        @include("partial.header-admin")

        <div class="container-md">
            @yield('content')
        </div>

    </div>
    @include("partial.script")
</body>
</html>