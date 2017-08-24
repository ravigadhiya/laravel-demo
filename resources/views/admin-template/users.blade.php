@extends("admin-template.layout")

@section('content')
    @include("admin-template.sidebar")
    <div class="content-wrapper" style="min-height: 916px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Users
                <small>List</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="javascript:void(0)"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="javascript:void(0)">Users</a></li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title"></h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                             <div class="row">
                                    <div class="col-sm-12">
                                        <table id="example2" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Full Name</th>
                                                    <th>Username</th>
                                                    <th>Email</th>
                                                    <th>Profile</th>
                                                    <th>About User</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            @foreach($users as $user)

                                                <tr>

                                                    <td>@if($user->usermeta) {{ $user->usermeta->firstname }} {{ $user->usermeta->lastname }} @endif</td>
                                                    <td>{{$user->name}}</td>
                                                    <td>{{$user->email}}</td>
                                                    <td>@if($user->usermeta)<img src="{{url($user->usermeta->profilepicture)}}" class="img-circle" alt="{{$user->usermeta->firstname}} {{$user->usermeta->lastname}}" height="50" width="50">@endif</td>
                                                    <td>@if($user->usermeta){{$user->usermeta->aboutme}}@endif</td>
                                                    <td>
                                                        <a class="btn btn-primary btn-block" href="{{ URL("/admin/profile/".$user->id."/edit") }}">Edit</a>
                                                        <a class="btn btn-danger pull-right btn-block btn-sm" href="{{ URL("/admin/users/".$user->id."/delete") }}">Delete</a>
                                                    </td>
                                                </tr>
                                             @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Full Name</th>
                                                    <th>Username</th>
                                                    <th>Email</th>
                                                    <th>Profile</th>
                                                    <th>About User</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>


                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
 @endsection