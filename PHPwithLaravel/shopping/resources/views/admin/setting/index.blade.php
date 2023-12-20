<!-- Stored in resources/views/child.blade.php -->
@extends('layouts.admin')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

@section('title')
    <title>Cài đặt</title>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('admin/main.js') }}"></script>
@endsection
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        @include('partials.contentHeader',['name' => 'Đặt', 'key' => 'Cài '])

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="btn-group">
                            <a class="btn dropdown-toggle btn btn-success mb-2 " data-toggle="dropdown" href="#">
                                Thêm cài đặt
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('settings.create') . '?type=Text'}}">Text</a></li>
                                <li><a href="{{route('settings.create') . '?type=Textarea'}}">Textarea</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Config key</th>
                                <th>Config value</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($settings as $setting)
                                <tr>
                                    <td>{{$setting->id}}</td>
                                    <td>{{$setting->config_key}}</td>
                                    <td>{{$setting->config_value}}</td>
                                    <td>
                                        <a href="{{route('settings.edit',['id'=> $setting->id]) .'?type=' . $setting->type}}" class="btn btn-info mr-2">Sửa</a>
                                        <a  data-url="{{route('settings.delete',['id'=> $setting->id])}}" class="btn btn-danger action-delete">Xóa</a>
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div>
                            {{ $settings->links('pagination::bootstrap-4') }}
                        </div>

                    </div>

                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

