<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registration</title>
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
<div class="login-box">
    <div class="login-logo">
        <a href="javascript:voud(0)"><b>Admin Login</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    <?php //print_r($errors->all());?>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if(Session::has('message'))
            <div style="margin-top:18px;" class="alert alert-success fade in">
                <a title="close" aria-label="close" data-dismiss="alert" class="close" href="#">×</a>
                <strong>{{ Session::get('message') }}</strong>
            </div>

        @endif

        <form action="{{ url('/register') }}" method="POST" enctype="multipart/form-data" action="">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="userrole" value="0">

            <div class="form-group has-feedback">
                <label>First Name</label>
                <input type="text" class="form-control" placeholder="First Name" name="firstname" value="{{old('firstname')}}">
                <span class="glyphicon form-control-feedback"></span>
            </div>

            <div class="form-group">
                <label for="lastname">Last Name</label>
                <input class="form-control" id="lastname" name="lastname" placeholder="Enter Last Name" type="text" value="{{old('lastname')}}">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email" type="email" value="{{old('email')}}">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Password</label>
                <input class="form-control" id="exampleInputpassword" name="password" placeholder="Enter password" type="text" value="{{old('password')}}">
            </div>


            <div class="form-group">
                <label for="name">User Name</label>
                <input class="form-control" id="name" name="name" placeholder="Enter login name" type="text" value="{{old('name')}}">
            </div>

            <div class="form-group">
                <label>About Me</label>
                <textarea class="form-control" rows="3" placeholder="Biographical Info" name="aboutme">{{old('aboutme')}}</textarea>
            </div>

            <div class="form-group">
                <label for="phonenumber">Phone Number</label>
                <input class="form-control" id="phonenumber" name="phonenumber" placeholder="Enter email" type="text" value="{{old('phonenumber')}}">
            </div>

            <div class="form-group">
                <label>Address</label>
                <textarea class="form-control" rows="3" name="address" placeholder="Enter your info">{{old('address')}}</textarea>
            </div>

            <div class="form-group">
                <label for="city">City</label>
                <input class="form-control" id="city" name="city" placeholder="Enter email" type="text" value="{{old('city')}}">
            </div>

            <div class="form-group">
                <label for="state">State</label>
                <input class="form-control" id="state" name="state" placeholder="Enter email" type="text" value="{{old('state')}}">
            </div>

            <div class="form-group">
                <label for="zip">Zip</label>
                <input class="form-control" id="zip" name="zip" placeholder="Enter email" type="text" value="{{old('zip')}}">
            </div>

            <div class="form-group">
                <label for="profilepicture">Profile Picture</label>
                <input id="profilepicture" type="file" name="profilepicture">
            </div>

            <div class="form-group">
                <label for="weburl">Web Url</label>
                <input class="form-control" id="weburl" name="weburl" placeholder="Enter Web Url" type="text" value="{{old('weburl')}}">
            </div>

            <div class="form-group">
                <label for="facebookurl">Facebook Url</label>
                <input class="form-control" id="facebookurl" name="facebookurl" placeholder="Enter Facebook Url" type="text" value="{{old('facebookurl')}}">
            </div>

            <div class="form-group">
                <label for="twitterurl">Twitter Url</label>
                <input class="form-control" id="twitterurl" name="twitterurl" placeholder="Enter Twitter Url" type="text" value="{{old('twitterurl')}}">
            </div>

            <div class="form-group">
                <label for="googleurl">Google Url</label>
                <input class="form-control" id="googleurl" name="googleurl" placeholder="Enter Google Url" type="text" value="{{old('googleurl')}}">
            </div>

            <div class="row">
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Sign Up</button>
                </div>
            </div>


        </form>




    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

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
