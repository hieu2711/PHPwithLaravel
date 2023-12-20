<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.admin')

@section('title')
<title>Trang chủ</title>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @include('partials.contentHeader',['name' => 'Trang Chủ', 'key' => ''])
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    Trang Chủ
                </div>

        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

