@extends('frontend.layouts.plain')
@section('title', '')
@section('content')

    <div class="login-box">
        <div class="login-logo">
            <img src="{!! url('admin/dist/img/mousewell-logo-200x148.png') !!}" height="100" />
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            @lang('admin.index.500-error')
        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->
@stop
@section('page-css')
@stop
@section('page-js')
@stop
