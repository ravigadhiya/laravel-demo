<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Blog</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{asset("/assest-admin/bootstrap/css/bootstrap.min.css")}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset("/assest-admin/dist/css/AdminLTE.min.css")}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset("/assest-admin/plugins/iCheck/square/blue.css")}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition login-page">

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <h1>Blog</h1>
                </div>
                <a href="{{ url('/blog') }}">Back To List</a>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <h1>{{$post->name}}</h1>
                    <div class="thumbnail bootsnipp-thumb">
                        <img src="{{url($post->image)}}" class="img-circle" alt="{{$post->name}}">
                    </div>
                    {!! $post->description !!}
                </div>


<?php
               /* session()->put('laravelfirstsession', 'Ravi Gadhiya');
                session()->put('boolean','');
                //session()->push('laravelfirstsession', 'Ravi Gadhiya 123');
                echo session()->get('laravelfirstsession');



                if (session()->has('laravelfirstsession')) {
                    echo "Session Exist";
                }

                //session()->forget('laravelfirstsession');
                //echo session()->pull('laravelfirstsession');
               // echo session()->exists('boolean');

                /*if (session()->exists('boolean')) {
                    echo "Boolean Session";
                }*/
                /*$session = session()->all();
                echo '<pre>';
                print_r($session);*/

                /*echo $encrypted = Crypt::encryptString('Hello world.');
                    echo '<br/>';
                echo $decrypted = Crypt::decryptString($encrypted);*/
                echo app_path();
        ?>
            </div>
        </div>
    </div>
</div>
<!-- jQuery 2.2.0 -->
<script src="{{asset("/assest-admin/plugins/jQuery/jQuery-2.2.0.min.js")}}"></script>
<!-- Bootstrap 3.3.5 -->
<script src="{{asset("/assest-admin/bootstrap/js/bootstrap.min.js")}}"></script>
<!-- iCheck -->
<script src="{{asset("/assest-admin/plugins/iCheck/icheck.min.js")}}"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
</body>
</html>
