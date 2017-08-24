@extends("admin-template.layout")

@section('content')
    @include("admin-template.sidebar")
    <div class="content-wrapper" style="min-height: 916px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Blog
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
                                                    <th>Title</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($posts as $post)
                                                <tr>
                                                    <td>{{$post->name}}</td>
                                                    <td>
                                                        <a class="btn btn-primary" href="{{ URL("/admin/blog/".$post->id."/edit") }}">Edit</a>
                                                        <a class="btn btn-danger" href="{{ URL("/admin/blog/".$post->id."/delete") }}">Delete</a>
                                                    </td>
                                                </tr>
                                             @endforeach
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th>Title</th>
                                                <th>Action</th>
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