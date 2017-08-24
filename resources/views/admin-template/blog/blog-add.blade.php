@extends("admin-template.layout")

@section('content')
    @include("admin-template.sidebar")
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>

                <small>Add User</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin/blog') }}"><i class="fa fa-dashboard"></i> Post</a></li>
                <li class="active">Add</li>
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
            <form method="post" role="form" enctype="multipart/form-data" action="" name="blog" id="blog" accept-charset="UTF-8">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Blog</h3>
                        </div>

                        <input type="hidden" name="_token" value="{{csrf_token()}}">

                        <div class="box-body">

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input class="form-control" id="title" name="name" placeholder="Enter Title" type="text" value="">
                                <input class="form-control" id="title" name="slug" placeholder="Enter Title" type="text" value="slug">
                            </div>


                            <div class="form-group">
                                <label for="image">Body</label>
                                <textarea name="description" class="textarea"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="image">Post Image</label>
                                <input id="image" type="file" name="image">
                            </div>

                            <div class="box-footer">
                                <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                            </div>

                        </div>
                    </div>
                </div>

            </form>
        </div>
        <!-- /.row -->
    </section>
    </div>
 @endsection