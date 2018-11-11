<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'login') }}</title>        
         <!-- Bootstrap -->
         <link href="{{ asset('Thirdparty/css/bootstrap.min.css')}}" rel="stylesheet">
         <link href="{{ asset('Thirdparty/css/custom.min.css')}}" rel="stylesheet">

    </head>
    <body class="login">
        <div>
            <div class="login_wrapper">
                <div class="animate form login_form" style="box-shadow: 0px 0px 10px #ccc;">
                    <section class="login_content">
                        <div>
                            <img src="{{ asset('Thirdparty/img/logo.png')}}" class="img-circle" style="width: 100px;height:auto;margin: -15px;">
                        </div>
                        @yield('content')
                    </section>
                </div>
            </div>
        </div>
    </body>
</html>