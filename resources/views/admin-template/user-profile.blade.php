@extends("admin-template.layout")

@section('content')
    @include("admin-template.sidebar")
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                {{$user->usermeta->firstname}} {{$user->usermeta->lastname}}
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> User</a></li>
                <li class="active">{{$user->usermeta->firstname}} {{$user->usermeta->lastname}} </li>
            </ol>

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
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
        </section>


    <section class="content">
        <div class="row">
            <form method="post" role="form" enctype="multipart/form-data" action="" name="userprofile" id="userprofile" accept-charset="UTF-8">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Profile</h3>
                        </div>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">

                        <div class="box-body">

                            <div class="form-group">
                                <label for="firstname">First Name</label>
                                <input class="form-control" id="firstname" name="firstname" placeholder="Enter First Name" type="text" value="{{$user->usermeta->firstname}}">
                            </div>

                            <div class="form-group">
                                <label for="lastname">Last Name</label>
                                <input class="form-control" id="lastname" name="lastname" placeholder="Enter Last Name" type="text" value="{{$user->usermeta->lastname}}">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email" type="email" value="{{$user->email}}">
                            </div>

                            <div class="form-group">
                                <label for="name">User Name</label>
                                <input class="form-control" id="name" name="name" placeholder="Enter login name" type="text" value="{{$user->name}}">
                            </div>

                            <div class="form-group">
                                <label>About Me</label>
                                <textarea class="form-control" rows="3" placeholder="Biographical Info" name="aboutme">{{$user->usermeta->aboutme}}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="phonenumber">Phone Number</label>
                                <input class="form-control" id="phonenumber" name="phonenumber" placeholder="Enter email" type="text" value="{{$user->usermeta->phonenumber}}">
                            </div>

                            <div class="form-group">
                                <label>Address</label>
                                <textarea class="form-control" rows="3" name="address" placeholder="Enter your info">{{$user->usermeta->address}}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="city">City</label>
                                <input class="form-control" id="city" name="city" placeholder="Enter email" type="text" value="{{$user->usermeta->city}}">
                            </div>

                            <div class="form-group">
                                <label for="state">State</label>
                                <input class="form-control" id="state" name="state" placeholder="Enter email" type="text" value="{{$user->usermeta->state}}">
                            </div>

                            <div class="form-group">
                                <label for="zip">Zip</label>
                                <input class="form-control" id="zip" name="zip" placeholder="Enter email" type="text" value="{{$user->usermeta->zip}}">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Profile Photo, Web & Social Links</h3>
                        </div>
                            <div class="box-body">

                                <div class="form-group">
                                    <label for="profilepicture">Profile Picture</label>
                                    <input id="profilepicture" type="file" name="profilepicture">
                                </div>

                                <div class="form-group">
                                    <label for="weburl">Web Url</label>
                                    <input class="form-control" id="weburl" name="weburl" placeholder="Enter Web Url" type="text" value="{{$user->usermeta->weburl}}">
                                </div>

                                <div class="form-group">
                                    <label for="facebookurl">Facebook Url</label>
                                    <input class="form-control" id="facebookurl" name="facebookurl" placeholder="Enter Facebook Url" type="text" value="{{$user->usermeta->facebookurl}}">
                                </div>

                                <div class="form-group">
                                    <label for="twitterurl">Twitter Url</label>
                                    <input class="form-control" id="twitterurl" name="twitterurl" placeholder="Enter Twitter Url" type="text" value="{{$user->usermeta->twitterurl}}">
                                </div>

                                <div class="form-group">
                                    <label for="googleurl">Google Url</label>
                                    <input class="form-control" id="googleurl" name="googleurl" placeholder="Enter Google Url" type="text" value="{{$user->usermeta->googleurl}}">
                                </div>
                            </div>

                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                        </div>
                    </div>
                </div>

            </form>
        </div>
        <!-- /.row -->
    </section>
    </div>
 @endsection