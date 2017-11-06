<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"content="width=device-width,initial-scale=1">
        <title>Laravel Apps</title>

        <link href="{{asset('bootstrap_3_3_6/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/style.css')}}" rel="stylesheet">

        <script src="{{asset('js/html5shiv_3_7_2.min.js')}}"></script>
        <script src="{{asset('js/respond_1_4_2.min.js') }}"></script>
            
    </head>
    <body>
        <div class="container">
            @include('navbar')
            @yield('main')
        </div>

        @yield('footer')
        <script> src="{{asset('js/jquery_2_2_1.min.js')}}"></script>
        <script> src="{{asset('bootstrap_3_3_6/js/bootstrap.min.js')}}"></script>
    </body>
</html>