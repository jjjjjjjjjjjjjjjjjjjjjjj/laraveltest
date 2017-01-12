
<!doctype html>
<html>
<head>
    @include('front.frontincludes.head')
</head>
<body>
 <!-- Start page loader -->
        <div id="page-loader">
            <div class="page-loader__spinner"></div>
        </div>
        @include('front.frontincludes.header')
        @yield('content')
        @include('front.frontincludes.footer')
    
</body>
</html>
